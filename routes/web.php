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
    return view('about/index');
});

Route::group(['prefix' => 'frontend', 'namespace'=>'frontend'], function() {
    //pendaftaran
    Route::group(['prefix' => 'pendaftaran','namespace'=>'pendaftaran'], function() {
        Route::get('/doctoral','DoctoralController@index');
        Route::get('/magang','MagangController@index');
        Route::get('/magister','MagisterController@index');
        Route::get('/pelatihan','PelatihanController@index');
        Route::get('/postdoctoral','PostDoctoralController@index');
        Route::get('/sarjana','SarjanaController@index');
    });
    //profil
    Route::group(['prefix' => 'profil','namespace'=>'profil'], function() {
        Route::get('/dosen','DosenController@index');
        Route::get('/lulusan','LulusanController@index');
        Route::get('/mahasiswa','MahasiswaController@index');
        Route::get('/organisasi','OrganisasiController@index');
        Route::get('/sarana','SaranaController@index');
        Route::get('/sejarah','SejarahController@index');
        Route::get('/visimisi','VisiMisiController@index');
    });
    //program
    Route::group(['prefix' => 'program','namespace'=>'program'], function() {
        Route::get('/beasiswa','BeasiswaController@index');
        Route::get('/doctoral','DoctoralController@index');
        Route::get('/magang','MagangController@index');
        Route::get('/magister','MagisterController@index');
        Route::get('/pelatihan','PelatihanController@index');
        Route::get('/postdoctoral','PostDoctoralController@index');
        Route::get('/sarjana','SarjanaController@index');
    });
    Route::group(['prefix' => 'tridharma','namespace'=>'tridharma'], function() {
        Route::get('/layanan','LayananController@index');
        Route::get('/pendidikan','PendidikanController@index');
        Route::get('/penelitian','PenelitianController@index');
        Route::get('/ppm','PengabdianController@index');
    });
});

