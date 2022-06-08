<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\CarEngine;
use App\CarModel;
use App\CarGeneration;
use App\CarTuning;
use App\Gallery;
use App\Review;
use App\Configuration;
use Illuminate\Http\Request;

class FiltersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('hard_reload')) {
            //$path_parts = session('path_parts');
            session()->forget('hard_reload');
            //session()->forget('path_parts');
            //return redirect()->to('/chiptuning/'. $path_parts);
            return redirect()->to('/chiptuning');
        }
        $brand_id = session('brand_id');
        $model_id = session('model_id');
        $generation_id = session('generation_id');
        $engine_id = session('engine_id');
        $images = Gallery::with('image')->latest()->take(3)->get();
        $reviews = Review::oldest()->where('description', '!=', '')->get();

        if (!empty($brand_id) && !empty($model_id) && !empty($generation_id) && !empty($engine_id)) {
            $brand = CarBrand::where('id', $brand_id)->with('image')->first();
            $model = CarModel::where('id', $model_id)->first();
            $generation = CarGeneration::where('id', $generation_id)->first();
            $engine = CarEngine::where('id', $engine_id)->first();
            $tuning = CarTuning::select('ct.id', 'ct.hp_standard', 'ct.nm_standard',
                'ct.hp_tuning', 'ct.nm_tuning', 'ct.price', 'ct.hp_stage_2', 'ct.nm_stage_2', 'ct.price_stage_2')
                ->from('car_tunings as ct')
                ->where(['ct.brand_id' => $brand_id, 'ct.model_id' => $model_id, 'ct.generation_id' => $generation_id, 'ct.engine_id' => $engine_id])
                ->first();
            return view('chiptuning')->with(compact('tuning', 'brand', 'model', 'generation', 'engine', 'images', 'reviews'));
        }

        return view('chiptuning')->with(compact('images', 'reviews'));
    }

    /**
     * Get all brands of the specific brand_id
     * @param $brand_id
     * @return App\CarModel
     */
    public function get_models_by_brand_id($brand_id)
    {
        if (is_numeric($brand_id) && $brand_id > 0) {
            $models = $this->get_models($brand_id);
            $first_model = $models->first();
            if (!is_null($models->first())) {
                if (is_null($first_model->position)) {
                    $models = $this->get_models($brand_id, 'name');
                }
            }

            if (!is_null(request('view'))) {
                return view('options')->with(compact('models'));
            }
            return $models;
        }
    }

    /**
     * Get all brands of the specific brand_id
     * @param $brand_id
     * @param string $order_col
     * @return App\Model
     */
    private function get_models($brand_id, $order_col = 'position')
    {
        return CarModel::select('cm.id', 'cm.name AS value')
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
     * @return App\Generation
     */
    public function get_generations_by_filters($brand_id, $model_id)
    {
        $model = CarModel::where('id', $model_id)->first();
        $model = !is_null($model) ? $model->name : '';

        if ((is_numeric($brand_id) && $brand_id > 0) && (is_numeric($model_id) && $model_id > 0) && $model) {
            $generations = $this->get_generations($brand_id, $model_id);
            $first_generation = $generations->first();
            if (!is_null($generations->first())) {
                if (is_null($first_generation->position)) {
                    $generations = $this->get_generations($brand_id, $model_id, 'name');
                }
            }

            if (!is_null(request('view'))) {
                return view('options')->with(compact('generations', 'model'));
            }

            return $generations;
        }
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
        return CarGeneration::select('cg.id', 'cg.name AS value')
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
     * @return App\CarEngine
     */
    public function get_engines_by_filters($brand_id, $model_id, $generation_id)
    {
        if ((is_numeric($brand_id) && $brand_id > 0)
            && (is_numeric($model_id) && $model_id > 0)
            && (is_numeric($generation_id) && $generation_id > 0)) {
            $engines = $this->get_engines($brand_id, $model_id, $generation_id);
            $first_engine = $engines->first();
            if (!is_null($engines->first())) {
                if (is_null($first_engine->position)) {
                    $engines = $this->get_engines($brand_id, $model_id, $generation_id, 'name');
                }
            }

            if (!is_null(request('view'))) {
                return view('options')->with(compact('engines'));
            }

            return $engines;
        }
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
        return CarEngine::select('ce.id', 'ce.name AS value')
            ->from('car_engines as ce')
            ->join('car_tunings as ct', 'ct.engine_id', '=', 'ce.id')
            ->where(['ct.brand_id' => $brand_id, 'ct.model_id' => $model_id, 'ct.generation_id' => $generation_id])
            ->orderBy('ce.' . $order_col)
            ->groupBy('ce.id', 'ce.name', 'ce.position')
            ->get();
    }

    /**
     * Save $brand_id, $model_id, $generation_id and $engine_id in session
     * @param Request $request
     */
    public function save_filters(Request $request)
    {
        $filters = ['brand_id', 'model_id', 'generation_id', 'engine_id', 'model_name'];
        foreach ($request->all() as $key => $val) {
            if (in_array($key, $filters)) {
                session([$key => $val]);
            }
        }

        $brand_id = session('brand_id');
        $model_id = session('model_id');
        $generation_id = session('generation_id');
        $engine_id = session('engine_id');

        if (!empty($brand_id) && !empty($model_id) && !empty($generation_id) && !empty($engine_id)) {
            $brand = CarBrand::select('name')->where('id', $brand_id)->with('image')->first();
            $model = CarModel::select('name')->where('id', $model_id)->first();
            $generation = CarGeneration::select('name')->where('id', $generation_id)->first();
            $engine = CarEngine::select('name')->where('id', $engine_id)->first();
            session(['hard_reload' => true]);
            // $path_parts = $brand->name . '-' . $model->name . '-' . $generation->name . '-' . $engine->name;
            // $path_parts = str_replace(['+-+', '(', '->'], '-', $path_parts);
            // $path_parts = str_replace([')', ' '], '', $path_parts);
            // session(['path_parts' => $path_parts]);
            return redirect()->to('/chiptuning/');
        }
    }

    /**
     * Get all brands
     * @return App\CarBrand
     */
    public function get_brands()
    {
        return CarBrand::select('car_brands.id', 'car_brands.name AS value')
            ->join('car_tunings', 'car_tunings.brand_id', '=', 'car_brands.id')
            ->orderBy('car_brands.name')
            ->groupBy('car_brands.id', 'car_brands.name')
            ->get();
    }
}
