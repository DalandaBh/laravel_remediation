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

Route::get('/remedi', function(){
    $nom = 'Dalanda';
    return ('Welcome to laravel remediation '.$nom);
});

Route::get('/remediation', function(){

    $nom = 'Dalanda';
    $sujet =' Laravel Remediation';
    return view('remediation', ['nom'=>'Dalanda','sujet'=>'Laravel Remediation']);
});

Route::get('/test', function(){
    
    return view('test');
});

Route::get('/hello', function(){
    return view('hello');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
