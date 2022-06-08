<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Str;

use Goutte\Client;

use Rap2hpoutre\FastExcel\FastExcel;

class ScrapeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrapper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starts Web Crawler to fetch data from ziptuning.nl';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        parent::__construct();
        $this->client = $client;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $brands = $models = $generations = $engines = [];

        // Send first call to the website and get brands data
        $crawler = $this->client->request('GET', 'https://www.ziptuning.nl');
        $brands_crawler = $crawler->filter('select')->eq(1);

        $brands = $brands_crawler->filter('option:contains("Kies merk")')->nextAll()->each(function ($node) {
            $brands = ['url' => $node->attr('value'), 'value' => $node->text()];
            return $brands;
        });

        $brands = collect($brands);
        // Send calls to fetch all models and get generations data

        echo 'models started' . count($brands) . "\n";
        $models = $brands->flatMap(function ($brand) {
            $crawler = $this->client->request('GET', $brand['url']);
            $models_crawler = $crawler->filter('select')->eq(2);
            return $models_crawler->filter('option:contains("Kies model")')->nextAll()->each(function ($node) {
                print($node->attr('value') . ' ' . $node->text()) . "\n";
                return ['url' => $node->attr('value'), 'value' => $node->text()];
            });
        });

        echo 'models ' . count($models) . " \n";

        echo 'generations started ' . count($models) . "\n";
        // Send calls to fetch all generations and get engines data
        $generations = $models->flatMap(function ($model, $key) {
            echo $key . "\n";
            if (!is_null($model)) {
                try {
                    $crawler = $this->client->request('GET', $model['url']);
                    $generations_crawler = $crawler->filter('select')->eq(3);
                    return $generations_crawler->filter('option:contains("Kies generatie")')->nextAll()->each(function ($node) {
                        if ($node->text() !== 'All') {
                            print('generation=' . $node->attr('value') . ' ' . $node->text()) . "\n";
                            return ['url' => $node->attr('value'), 'value' => $node->text()];
                        }
                    });
                } catch (Exception $e) {

                }
            }
        });

        echo 'generations ended ' . count($generations) . "\n";

        $generations = $generations->filter(function ($value, $key) {
            return $value != null;
        });

        echo 'engines started ' . "\n";
        // Send calls to fetch all engines
        $engines = $generations->flatMap(function ($generation, $key) {
            echo $key . "\n";
            if (!is_null($generation)) {
                try {
                    $crawler = $this->client->request('GET', $generation['url']);
                    $engines_crawler = $crawler->filter('select')->eq(4);
                    return $engines_crawler->filter('option:contains("Kies specificatie")')
                        ->nextAll()->each(function ($node) {
                            if ($node->text() !== 'All') {
                                print('engine=' . $node->attr('value') . ' ' . $node->text()) . "\n";
                                return ['url' => $node->attr('value'), 'value' => $node->text()];
                            }
                        });
                } catch (Exception $e) {

                }
            }
        });

        echo 'engines_count' . count($engines) . "\n";

        $engines = $engines->filter(function ($value, $key) {
            return $value != null;
        });

        (new FastExcel($engines))->export('chiptuning_engines.xlsx');

        echo "\n\n\n\n";
        // Send final calls to fetch the actual data
        $data = $engines->map(function ($engine, $key) {
            echo $key . "\n\n\n\n";
            print_r($engine);
            try {
                $crawler = $this->client->request('GET', $engine['url']);
                $bread_crumb = $crawler->filter('.crumbs')->each(function ($node) {

                    return isset($node) ? $node->text() : '';

                })[0];
                $bread_crumb = !empty($bread_crumb) ? $bread_crumb : '';
                echo "\n\n\n\n";
                $bread_crumb = explode(" » ", $bread_crumb);
                $bread_crumb = collect($bread_crumb)->slice(2);
                $brand = $bread_crumb->first();
                $model = $bread_crumb->get(3);
                $generation = $bread_crumb->get(4);
                $generation_parts = explode(' ', $generation);
//                $engine_needle = end($generation_parts);
//                $engine_needle = str_replace('...', '…', $engine_needle);
//                $engine = trim(Str::after($bread_crumb->last(), $engine_needle));
                $engine = $engine['value'];
                $hp_standard = '0';
                $hp_tuning = '0';
                $nm_standard = '0';
                $nm_tuning = '0';

                /** Stage 1 **/
                if ($crawler->filter('td:contains("Vermogen")')->count() > 0) {
                    $stage_1_row_1 = $crawler->filter('td:contains("Vermogen")')->nextAll()->each(function ($node) {
                        return $node->text();
                    });
                    $hp_standard = str_replace([' ', 'pk'], '', $stage_1_row_1[0]);
                    $hp_tuning = str_replace([' ', 'pk'], '', $stage_1_row_1[1]);
                }

                if ($crawler->filter('td:contains("Koppel")')->count() > 0) {
                    $stage_1_row_2 = $crawler->filter('td:contains("Koppel")')->nextAll()->each(function ($node) {
                        return $node->text();
                    });
                    $nm_standard = str_replace([' ', 'Nm'], '', $stage_1_row_2[0]);
                    $nm_tuning = str_replace([' ', 'Nm'], '', $stage_1_row_2[1]);
                }

                /** Stage 2 **/
                if ($crawler->filter('#stage2')->count() > 0) {
                    $stage_2_row_1 = $crawler->filter('#stage2')->children()->each(function ($node) {
                        if (!empty($node->text())) {
                            return explode(' ', str_replace(['pk', '+ ', 'Nm', 'Koppel'], '', Str::before(Str::after($node->text(), 'Vermogen'), 'Nm+')));
                        }
                    })[0];

                    $hp_tuning_stage_2 = !empty($stage_2_row_1[4]) ? $stage_2_row_1[4] : "";
                    $hp_tuning_stage_2 = !empty($stage_2_row_1[3]) ? $stage_2_row_1[3] : $hp_tuning_stage_2;

                    $nm_tuning_stage_2 = !empty($stage_2_row_1[10]) ? $stage_2_row_1[10] : "";
                } else {
                    $hp_tuning_stage_2 = 0;

                    $nm_tuning_stage_2 = 0;
                }

                echo $brand . ' ' . $model . ' ' . $generation . ' ' . $engine . ' ' .
                    $hp_standard . ' ' . $hp_tuning . ' ' . $nm_standard . ' ' .
                    $nm_tuning . ' ' . $hp_tuning_stage_2 . ' ' . $nm_tuning_stage_2 . ' ' . "\n\n\n\n";

                return [
                    'BrandName' => $brand, 'ModelName' => $model, 'Generation' => $generation, 'EngineName' => $engine,
                    'HPstandard' => $hp_standard, 'HPtuning' => $hp_tuning, 'NMstandard' => $nm_standard, 'NMtuning' => $nm_tuning, 'Price' => 0,
                    'HPStage2' => $hp_tuning_stage_2, 'NMStage2' => $nm_tuning_stage_2, 'PriceStage2' => 0
                ];
            } catch (Exception $e) {

            }
        });

        $data = $data->filter(function ($value, $key) {
            return $value != null;
        });

        print_r($data);
        (new FastExcel($data))->export('chiptuning_exported_file.xlsx');
    }
}
