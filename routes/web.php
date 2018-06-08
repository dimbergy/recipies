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

//Route::get('/', 'PostsController@index');
Route::get('/', 'RecipiesController@index');

Route::get('/posts/{post}', 'RecipiesController@show');

Route::get('/insert', 'RecipiesController@insert');
//Route::resource('queries', 'QueryController@search');
Route::post('/posts/search', 'RecipiesController@search');

Route::post('/posts/indexadmin', 'RecipiesController@indexadmin');

// Controller => PostController

// Elloquent MODELS => Post

// migration =>create_post_table

/*
Route::get('/', function () {
    return view('welcome', [

      'name' => 'Home',
      'site' => 'Dimitrios Vergados'

    ]);
});

Route::get('/about', function () {
    return view('/about', [

      'name' => 'About',
      'site' => 'Dimitrios Vergados'

    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [

      'name' => 'Gallery',
      'site' => 'Dimitrios Vergados'

    ]);
});

Route::get('/news', 'RecipiesController@index');


Route::get('/contact', function () {
    return view('contact', [

      'name' => 'Contact',
      'site' => 'Dimitrios Vergados'

    ]);
});
*/
