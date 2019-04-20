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
Route::get('/home', 'SiteController@get_index');

Route::get('/produk/{jenis_produk?}', 'ProductController@get_product');

Route::get('/contact', 'SiteController@get_contact');

Route::get('/blog-list', 'BlogController@get_blog_list');

Route::get('/blog/{id}', 'BlogController@get_blog');

Route::post('/berikan_komentar_blog', 'BlogController@berikan_komentar_blog');

Route::get('/tambahkan_blog', 'BlogController@tambahkan_blog');

Route::get('/history', 'SiteController@get_history');

Route::get('/visi_misi', 'SiteController@get_vision_mission');

Route::get('/founder', 'SiteController@get_founder');

Route::post('/kritik_saran', 'KritikSaranController@post_kritik_saran');

Route::get('/lihat_kritik_saran', 'KritikSaranController@get_kritik_saran');