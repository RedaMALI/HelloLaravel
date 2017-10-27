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
    return redirect('/subscriptions');
});

Route::get('/login', 'GoogleLoginController@index');
Route::get('/loginCallback', 'GoogleLoginController@store');
Route::get('/logout', 'GoogleLoginController@destroy');

Route::get('/subscriptions', 'SubscriptionsController@index')->middleware('google.auth');
Route::get('/activities/{channelId}', 'ActivitiesController@index')->middleware('google.auth');
Route::get('/videos/{channelId}', 'VideosController@index')->middleware('google.auth');