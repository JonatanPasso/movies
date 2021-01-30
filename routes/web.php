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

Route::get('/', 'ApiController@index');
Route::get('/api/show-all', 'ApiController@showAll');
Route::get('/api/show-id/{ind}', 'ApiController@showId');
Route::get('/api/show-all-reviews', 'ApiController@showAllReviews');
Route::get('/api/show-reviews-id/{param}', 'ApiController@showReviewsId');
Route::post('/api/create-review', 'ApiController@createReview');

