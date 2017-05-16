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

Route::auth();

Route::post('/zahlungsmethode', 'HomeController@zahlungsmethode');

Route::post('/speichern', 'HomeController@speichern');

Route::get('/profil', 'HomeController@profilbearbeiten');
	
Route::post('/book', 'BuchungsController@buchen');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index');

Route::post('/available', 'BuchungsController@available');

Route::get('/impressum', function() {
	return view('impressum');
});

Route::post('/bssp', 'HomeController@bssp');

Route::post('/zipcode', 'HomeController@zipcode');