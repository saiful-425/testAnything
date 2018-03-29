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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/{slug?}', function ($slug = 'home') {
    // Initialize the Storyblok Client with your private
    // access token (currently mine)
    $storyblok = new \Storyblok\Client('akYA0RB4BzCPUoRfjIvUdQtt');
    // Load Content according to slug/path
    $data = $storyblok->getStoryBySlug($slug)->getStoryContent();
    // render index with story as it's data
    return view('welcome', ['story' => (object)$data['story']]);
});