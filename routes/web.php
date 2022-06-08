<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home
Route::get('/', 'HomeController@index');

// Post
Route::get('blog/{slug}', 'BlogController@show');


// Filters
Route::get('get_brands', 'FiltersController@get_brands');
Route::get('get_models_by_brand_id/{brand_id}', 'FiltersController@get_models_by_brand_id');
Route::get('get_generations_by_filters/{brand_id}/{model_id}', 'FiltersController@get_generations_by_filters');
Route::get('get_engines_by_filters/{brand_id}/{model_id}/{generation_id}', 'FiltersController@get_engines_by_filters');
Route::post('save_filters', 'FiltersController@save_filters');
Route::post('contact-us', 'ContactUsController@store');

// Gallery
Route::get('cars-gallery', 'GalleryController@index');

// Car Details
Route::get('car-details', function () {
    return view('car-details');
});

// Chiptuning
Route::get('chiptuning/{slug?}', 'FiltersController@index');

// Contact Us
Route::get('contact-us', function () {
    return view('contact-us');
});

// Reviews
Route::get('privacy', function () {
    return view('privacy');
});

// Reviews
Route::get('reviews', function () {
    return view('reviews');
});
