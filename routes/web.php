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
    return view('frontend/home/home');
});

Route::group(['namespace' => 'frontend'], function () {
    //pendaftaran
    Route::group(['prefix' => 'pendaftaran', 'namespace' => 'pendaftaran'], function () {
        Route::get('/doctoral', 'DoctoralController@index');
        Route::get('/magang', 'MagangController@index');
        Route::get('/magister', 'MagisterController@index');
        Route::get('/pelatihan', 'PelatihanController@index');
        Route::get('/postdoctoral', 'PostDoctoralController@index');
        Route::get('/sarjana', 'SarjanaController@index');
    });
    //profil
    Route::group(['prefix' => 'profil', 'namespace' => 'profil'], function () {
        Route::get('/dosen', 'DosenController@index');
        Route::get('/lulusan', 'LulusanController@index');
        Route::get('/mahasiswa', 'MahasiswaController@index');
        Route::get('/organisasi', 'OrganisasiController@index');
        Route::get('/sarana', 'SaranaController@index');
        Route::get('/sejarah', 'SejarahController@index');
        Route::get('/visimisi', 'VisiMisiController@index');
    });
    //program
    Route::group(['prefix' => 'program', 'namespace' => 'program'], function () {
        Route::get('/beasiswa', 'BeasiswaController@index');
        Route::get('/doctoral', 'DoctoralController@index');
        Route::get('/magang', 'MagangController@index');
        Route::get('/magister', 'MagisterController@index');
        Route::get('/pelatihan', 'PelatihanController@index');
        Route::get('/postdoctoral', 'PostDoctoralController@index');
        Route::get('/sarjana', 'SarjanaController@index');
    });
    Route::group(['prefix' => 'tridharma', 'namespace' => 'tridharma'], function () {
        Route::get('/layanan', 'LayananController@index');
        Route::get('/pendidikan', 'PendidikanController@index');
        Route::get('/penelitian', 'PenelitianController@index');
        Route::get('/ppm', 'PengabdianController@index');
    });
    // berita
    Route::group(['prefix' => 'berita', 'namespace' => 'berita'], function () {
        Route::get('/Mobil-Listrik-Karya-Mahasiswa-Mesin-Unpas', 'MobilListrikKaryaMahasiswaMesinUnpasController@index');
        Route::get('/pendaftaran-wisuda-online-UNPAS', 'PendaftaranWisudaOnlineUnpasController@index');
        Route::get('/pmb-fakultas-teknik-universitas-pasundan', 'PmbFakultasTeknikUniversitasPasundanController@index');
        Route::get('/teknik-mesin-unpas-ciptakan-traktor-portable', 'TeknikMesinUnpasCiptakanTraktorPortableController@index');
        Route::get('/Projek-Sweeper-Mahasiswa-Mesin', 'ProjekSweeperMahasiswaMesinController@index');
        Route::get('/new-noraml-starter-kit', 'NewNormalStarterKitController@index');
        Route::get('/Penghargaan-di-IMI-Jabar-Awards-2019', 'PenghargaanDiIMIJabarAwards2019Controller@index');
        Route::get('/Rapat-Perbaikan-SITI-SAPTO-Fakultas-Teknik-UNPAS', 'RapatPerbaikanSitiSaptoFakultasTeknikUnpasController@index');
        Route::get('/selamat-atas-keberhasilan-prodi-di-fakultas-teknik-unpas', 'SelamatAtasKeberhasilanProdiDiFakultasTeknikUnpasController@index');
    });
    // beranda-berita
    Route::group(['prefix' => 'berita', 'kategori', 'home', 'namespace' => 'berita', 'kategori', 'home'], function () {
        Route::get('/beranda-berita', 'BerandaBeritaController@index');
    });
});

Route::group(['namespace' => 'backend'], function () {
    Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
        Route::get('/', 'AdminController@index');
        Route::group(['prefix' => 'profil', 'namespace' => 'profil'], function () {
            Route::get('/dosen', 'DosenController@index');
            Route::post('/dosen-store','DosenController@store')->name('dosen.store');
            Route::get('/lulusan', 'LulusanController@index');
            Route::post('/lulusan-store','LulusanController@store')->name('lulusan.store');
            Route::get('/mahasiswa', 'MahasiswaController@index');
            Route::post('/mahasiswa-store','MahasiswaController@store')->name('mahasiswa.store');
            Route::get('/organisasi', 'OrganisasiController@index');
            Route::post('/organisasi-store','OrganisasiController@store')->name('organisasi.store');
            Route::get('/sarana', 'SaranaController@index');
            Route::post('/sarana-store','SaranaController@store')->name('sarana.store');
            Route::get('/sejarah', 'SejarahController@index')->name('sejarah.index');
            Route::post('/sejarah-store','SejarahController@store')->name('sejarah.store');
            Route::get('/visimisi', 'SejarahController@index');
            Route::post('/visimisi-store','VisiMisiController@store')->name('visimisi.store');
        });
    });
});