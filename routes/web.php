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
//     return view('welcome');
// });

Route::get('/', 'SiteController@get_index');
Route::get('/index', 'SiteController@get_index');

Route::get('/product/{jenis_produk?}', 'ProductController@get_product');

Route::get('/contact', 'SiteController@get_contact');

Route::get('/blog-list', 'BlogController@get_blog_list');

Route::get('/history', 'SiteController@get_history');

Route::get('/vision-mission', 'SiteController@get_vision_mission');

Route::get('/founder', 'SiteController@get_founder');

Route::post('/kritik_saran', 'KritikSaranController@post_kritik_saran');