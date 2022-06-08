<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Str;

use App\Review;

use Goutte\Client;

class GoogleReviewsScrapeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google_scrapper:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starts Web Crawler to fetch reviews of Chiptuning Rotterdam Breeweg 9, Rotterdam, Netherlands';

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
        $crawler = $this->client->request('GET', env('APP_URL') . '/reviews');
        $crawler = $crawler->filter('.section-layout-new');

        $logos = $crawler->filter('.section-review-link')->each(function ($node) {
            return str_replace(['background-image:url(', ')'], '', trim($node->attr('style')));
        });

        $titles = $crawler->filter('.section-review-title')->each(function ($node) {
            return trim($node->text());
        });

        $stars = $crawler->filter('.section-review-stars')->each(function ($node) {
            return substr(trim($node->attr('aria-label')), 0, 1);
        });

        $durations = $crawler->filter('.section-review-publish-date')->each(function ($node) {
            return trim($node->text());
        });
        $reviews = $crawler->filter('.section-review-text')->each(function ($node) {
            $review = trim($node->html());
            $org_pos = strpos($review, '(Original)');
            $review = strpos($review, '(Original)') == false ? $review : substr($review, $org_pos + 10);
            return $review;
        });

        for($i = 0, $count = count($reviews) - 1; $i < $count; $i++ ) {
            if($i == '17') continue; // To skip fake comment of "Jan Willem Peters"
            Review::create([
                'title' => $titles[$i],
                'logo' => $logos[$i],
                'star' => $stars[$i],
                'duration' => date("Y-m-d", strtotime($durations[$i])),
                'description' => $reviews[$i]
            ]);
            // echo 'logos=' . $logos[$i] . "\n";
            // echo 'titles=' . $titles[$i] . "\n";
            // echo 'stars=' . $stars[$i] . "\n";
            // echo 'durations=' . strtotime($durations[$i]) . "\n";
            // echo 'reviews=' . $reviews[$i] . "\n";
        }
    }
}
