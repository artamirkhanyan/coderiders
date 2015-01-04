<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'AccountantController@getIndex');

Route::get('payin', 'AccountantController@getPayin');
Route::get('payout', 'AccountantController@getPayout');
//Route::get('questions/{id}', 'QuestionsController@showQuestion');
//Route::get('questions/{id}/{name}', 'QuestionsController@showQuestion');