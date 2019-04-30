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
});

Route::get('/bcards', 'GeneratePDF@index');
Route::post('/bcards', 'GeneratePDF@store');
Route::get('/bcards/create', 'GeneratePDF@create');
Route::get('/bcards/show', 'GeneratePDF@show');

Route::get('/pdfView', 'GeneratePDF@generate_pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/info', function () {
    return view('info');
});