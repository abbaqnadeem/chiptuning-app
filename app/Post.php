<?php

namespace App;

use App\Model as Model;

class Post extends Model
{
    public function image() {
    	return $this->morphOne(Image::class, 'imageable');
    }
}
