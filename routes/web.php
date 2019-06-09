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
Route::get('/sejarah2', 'SiteController@sejarah2');
Route::get('/penghargaan2', 'SiteController@penghargaan2');
Route::get('/visi-misi2', 'SiteController@visi_misi2');
Route::get('/pendiri2', 'SiteController@pendiri2');
Route::get('/visi-misi3', 'SiteController@visi_misi3');
Route::get('/pemesanan2', 'SiteController@pemesanan2');
Route::get('/produk-1', 'SiteController@produk_1');
Route::get('/produk-2', 'SiteController@produk_2');
Route::get('/produk-3', 'SiteController@produk_3');
Route::get('/produk-4', 'SiteController@produk_4');
Route::get('/produk-5', 'SiteController@produk_5');