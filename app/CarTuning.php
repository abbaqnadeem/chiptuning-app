<?php

namespace App;

use App\Model as Model;

class CarTuning extends Model
{
    public function brand()
    {
        return $this->belongsTo(CarBrand::class, 'brand_id', 'id');
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'model_id', 'id');
    }

    public function generation()
    {
        return $this->belongsTo(CarGeneration::class, 'generation_id', 'id');
    }

    public function engine()
    {
        return $this->belongsTo(CarEngine::class, 'engine_id', 'id');
    }
}
