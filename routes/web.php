<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view', function () {
    echo "I am into the view!";
});

Route::post('/desert', function () {
    echo "I have just made post request!";
});

Route::get('/viewId/{id?}', function ($id=null) {
    echo "I get the id! $id";
});
