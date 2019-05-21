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

*   Eg of Route to Home Page:
>   Route::get('/', function () {
        return view('welcome');
    });

*   Eg of Route to /about Pae:
>   Route::get('/about', function () {
        return view('pages/about');
    });

*   Eg of creating route & html content together:
>   Route::get('/hello', function () {
    return '<h1>Hello World</h1> welcome to Laravel';
});

*   Eg of accepting props & displaying html content with props:
>   Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This user is ' .$name. ' with an id of ' .$id;
});
*/

// 2.1: Create the Index Route
Route::get('/', 'PagesController@index');
// 2.2: Create the about Route
Route::get('/about', 'PagesController@about');
// 2.3: Create the services Route
Route::get('/services', 'PagesController@services');
// 11.1 Routes to CRUD services
Route::resource('posts', 'PostsController');
// 21: Auto Adds Auth & Dashboard feature
Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
