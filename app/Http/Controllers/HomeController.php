<?php

namespace App\Http\Controllers;

use App\Review;
use App\Post;
use App\Gallery;

class HomeController extends Controller
{
    public function index() {
        $reviews = Review::oldest()->where('description', '!=', '')->get();
        $blogs = Post::orderBy('created_at', 'desc')->with('image')->take(3)->get();
        $images = Gallery::with('image')->latest()->take(3)->get();
        return view('home')->with(compact('reviews', 'blogs', 'images'));
    }
}