<?php

use App\Category;

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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::apiResource('tasks', 'TaskController');
Route::post('/tasks/{task}/complete', 'TaskController@complete')->name('tasks.complete');

//combo categories

Route::get('/categories', function() {
    return response()->json(Category::getCategories());
});