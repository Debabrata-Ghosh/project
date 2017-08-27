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

// Route::get('/', function () {
//     return view('auth.signin');
// });

Route::get('/',['uses' =>'AuthController@signin', 'as'=>'signin']);
Route::get('/signup/',['uses' =>'AuthController@signup', 'as'=>'signup']);
Route::get('/home/',['uses' =>'AuthController@home', 'as'=>'home']);


