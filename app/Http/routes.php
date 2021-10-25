<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks',function (){
    return view('tasks.index');
})->name('tasks.index');

Route::get('/tasks/create',function (){
    return view('tasks.create');
})->name('tasks.create');

Route::post('/tasks',function (){
    //TODO STORE
})->name('tasks.store');
