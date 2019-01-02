<?php

/*
|--------------------------------------------------------------------------
| Creator : Tosca Yoel Connery
|--------------------------------------------------------------------------
|
| This website is dedicated for Kampung Patin, Desa Koto Masjid
| XIII Koto Kampar, Kampar, Riau Province
| 
|
*/

Route::get('/', 'SiteController@get_index');
Route::get('/index', 'SiteController@get_index');

Route::get('/product/{jenis_produk?}', 'ProductController@get_product');

Route::get('/contact', 'SiteController@get_contact');

Route::get('/blog-list', 'BlogController@get_blog_list');

Route::get('/history', 'SiteController@get_history');

Route::get('/vision-mission', 'SiteController@get_vision_mission');

Route::get('/founder', 'SiteController@get_founder');

Route::post('/kritik-saran', 'KritikSaranController@post_kritik_saran');

Route::get('/lihat-kritik-saran', 'KritikSaranController@get_kritik_saran');