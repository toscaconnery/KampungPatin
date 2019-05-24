<?php

/*
|--------------------------------------------------------------------------
| Tosca Yoel Connery
| toscayoelconnery@gmail.com
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

Route::get('/produk/{jenis_produk?}', 'ProductController@produk');

Route::get('/contact-us', 'SiteController@get_contact_us');
Route::get('/contact-us2', 'SiteController@get_contact_us2');

Route::get('/daftar_blog', 'BlogController@get_blog_list');

Route::get('/blog/{id}', 'BlogController@get_blog');

Route::post('/berikan_komentar_blog', 'BlogController@berikan_komentar_blog');

Route::get('/tambahkan_blog', 'BlogController@tambahkan_blog');

// Profil perusahaan
Route::get('/sejarah', 'SiteController@sejarah');
Route::get('/visi_misi', 'SiteController@visi_misi');
Route::get('/pendiri', 'SiteController@pendiri');

Route::post('/kritik_saran', 'KritikSaranController@post_kritik_saran');

Route::get('/lihat_kritik_saran', 'KritikSaranController@get_kritik_saran');

Route::get('/faq', 'FaqController@faq_index');


///// NEW
Route::get('/index2', 'SiteController@index2');
Route::get('/index2-landing', 'SiteController@index2_landing');