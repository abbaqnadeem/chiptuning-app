<?php

namespace App\Http\View\Composers;

use App\CarBrand;
use App\CarModel;
use App\CarEngine;
use App\CarGeneration;
use App\Post;
use Illuminate\View\View;

class FiltersComposer
{
    public function compose(View $view)
    {
        $latest_post = Post::orderBy('created_at', 'desc')->with('image')->first();
        $car_models = $car_generations = $car_engines = [];
        $model_name = session('model_name');
        $model_name = str_replace('--', '/', $model_name);
        $brand_id = session('brand_id');
        $model_id = session('model_id');
        $generation_id = session('generation_id');
        $car_brands = CarBrand::select('car_brands.id', 'car_brands.name')
            ->join('car_tunings', 'car_tunings.brand_id', '=', 'car_brands.id')
            ->orderBy('car_brands.name')
            ->groupBy('car_brands.id', 'car_brands.name')
            ->get();

        // Models
        if (!empty($brand_id)) {
            $car_models = $this->get_models($brand_id);
            $first_model = $car_models->first();
            if (!is_null($car_models->first())) {
                if (is_null($first_model->position)) {
                    $car_models = $this->get_models($brand_id, 'name');
                }
            }
        }

        // Generations
        if (!empty($brand_id) && !empty($model_id)) {
            $car_generations = $this->get_generations($brand_id, $model_id);
            $first_generation = $car_generations->first();
            if (!is_null($car_generations->first())) {
                if (is_null($first_generation->position)) {
                    $car_generations = $this->get_generations($brand_id, $model_id, 'name');
                }
            }
        }

        // Engines
        if (!empty($brand_id) && !empty($model_id) && !empty($generation_id)) {
            $car_engines = $this->get_engines($brand_id, $model_id, $generation_id);
            $first_engine = $car_engines->first();
            if (!is_null($car_engines->first())) {
                if (is_null($first_engine->position)) {
                    $car_engines = $this->get_engines($brand_id, $model_id, $generation_id, 'name');
                }
            }
        }

        $view->with(compact('car_brands', 'car_models', 'car_generations', 'car_engines',
            'model_name', 'latest_post'));
    }

    /**
     * Get all brands of the specific brand_id
     * @param $brand_id
     * @param string $order_col
     * @return App\Model
     */
    private function get_models($brand_id, $order_col = 'position')
    {
        return CarModel::select('cm.id', 'cm.name', 'cm.position')
            ->from('car_models as cm')
            ->join('car_tunings as ct', 'ct.model_id', '=', 'cm.id')
            ->where('ct.brand_id', $brand_id)
            ->groupBy('cm.id', 'cm.name', 'cm.position')
            ->orderBy('cm.' . $order_col)
            ->get();
    }

    /**
     * Get all generations of the specific $brand_id and $model_id
     * @param $brand_id
     * @param $model_id
     * @param string $order_col
     * @return App\Generation
     */
    private function get_generations($brand_id, $model_id, $order_col = 'position')
    {
        return CarGeneration::select('cg.id', 'cg.name', 'cg.position')
            ->from('car_generations as cg')
            ->join('car_tunings as ct', 'ct.generation_id', '=', 'cg.id')
            ->where(['ct.brand_id' => $brand_id, 'ct.model_id' => $model_id])
            ->orderBy('cg.' . $order_col)
            ->groupBy('cg.id', 'cg.name', 'cg.position')
            ->get();
    }

    /**
     * Get all engines of the specific $brand_id, $model_id and $generation_id
     * @param $brand_id
     * @param $model_id
     * @param $generation_id
     * @param string $order_col
     * @return App\CarEngine
     */
    private function get_engines($brand_id, $model_id, $generation_id, $order_col = 'position')
    {
        return CarEngine::select('ce.id', 'ce.name', 'ce.position')
            ->from('car_engines as ce')
            ->join('car_tunings as ct', 'ct.engine_id', '=', 'ce.id')
            ->where(['ct.brand_id' => $brand_id, 'ct.model_id' => $model_id, 'ct.generation_id' => $generation_id])
            ->orderBy('ce.' . $order_col)
            ->groupBy('ce.id', 'ce.name', 'ce.position')
            ->get();
    }
}
