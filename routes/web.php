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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
Route::get('/truyen/{id}', 'TruyenController@show');
>>>>>>> origin/Huy

=======
>>>>>>> remotes/origin/Tan

=======
Route::get('/', 'TruyenController@index');
>>>>>>> remotes/origin/Chuen

Route::get('/truyen/{id}/{idchap}', 'TruyenController@showChapter');

