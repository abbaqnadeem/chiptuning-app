<?php

namespace App\Http\Controllers;

use App\Review;
use App\Post;

class BlogController extends Controller
{
    public function show($slug) {
        $slug_parts = explode('-', $slug);
        $id = array_pop($slug_parts);
        $blog = Post::where('id', $id)->with('image')->first();
        $recent_posts = Post::where('id', '!=', $id)->orderBy('created_at', 'desc')->with('image')->get();
        $reviews = Review::oldest()->where('description', '!=', '')->get();
        return view('blog-details')->with(compact('blog' ,'recent_posts', 'reviews'));
    }
}