<?php

namespace App\Http\Controllers;

use App\Gallery;

class GalleryController extends Controller
{
    public function index() {
        $images = Gallery::with('image')->latest()->get();
        return view('gallery')->with(compact('images'));
    }
}