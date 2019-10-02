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

Route::get('/', function () {
    return view('welcome');
})->middleware('TrimStrings');

Route::get('/checkUser', function () {
    return view('welcome');
});

Route::get('/xml','Controller@readXml');

// Route::match(['get','post'], function () {
//     console.log('you are reaching some where in the request');
// });

