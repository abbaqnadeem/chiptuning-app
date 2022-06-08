<?php

namespace App;

use App\Model as Model;

class Gallery extends Model
{
	protected $table = "galleries";
    public function image() {
    	return $this->morphOne(Image::class, 'imageable');
    }
}
