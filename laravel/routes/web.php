<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@influencers')->name('influencers');

Route::get('/brand', 'HomeController@brands')->name('brands');

Route::get('/brand/advertising', 'HomeController@brand_ads')->name('brand-ads');
Route::get('/influencer/advertising', 'HomeController@influencer_ads')->name('infuencer-ads');

Route::get('/blogs', 'BlogController@home')->name('blogs');

Route::get('/team', 'TeamController@home')->name('team');

Route::get('/faq', 'FaqController@home')->name('faq');



Route::get('login/faq', 'BackofficeController@faqoverview')->name('overviewfaq');
Route::get('login/faq/edit', 'BackofficeController@faqedit')->name('editfaq');

Route::get('login/blogs', 'BackofficeController@blogoverview')->name('overviewblogs');
Route::get('login/blogs/edit', 'BackofficeController@blogedit')->name('editblogs');