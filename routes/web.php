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

use App\Http\Controllers\frontend\berita\PmbFakultasTeknikUniversitasPasundanController;
use PhpParser\Node\Stmt\Echo_;

Route::get('/', function () {
    return view('frontend/home/home');
});

//route untuk frontend
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
    // tridahram
    Route::group(['prefix' => 'tridharma', 'namespace' => 'tridharma'], function () {
        Route::get('/layanan', 'LayananController@index');
        Route::get('/pendidikan', 'PendidikanController@index');
        Route::get('/penelitian', 'PenelitianController@index');
        Route::get('/ppm', 'PengabdianController@index');
    });
    // sivitas
    Route::group(['prefix' => 'sivitas', 'namespace' => 'sivitas'], function () {
        Route::get('/mahasiswa', 'MhsController@index');
        Route::group(['prefix' => 'dosen', 'namespace' => 'dosen'], function () {
            Route::get('/index', 'DosenController@index');
            Route::get('/page', 'PageController@index');
        });
        
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
        Route::get('/index', 'BerandaBeritaController@index');
        Route::group(['prefix' => 'kategori', 'namespace' => 'kategori'], function () {
            Route::group(['prefix' => 'prodi', 'namespace' => 'prodi'], function () {
                Route::get('/index', 'ProdiController@index');
            });
            Route::group(['prefix' => 'pengabdian', 'namespace' => 'pengabdian'], function () {
                Route::get('/index', 'PengabdianController@index');
            });
            Route::group(['prefix' => 'penelitian', 'namespace' => 'penelitian'], function () {
                Route::get('/index', 'PenelitianController@index');
            });
            Route::group(['prefix' => 'akademik', 'namespace' => 'akademik'], function () {
                Route::get('/index', 'AkademikController@index');
            });
        });
    });
    // gallery
    Route::group(['prefix' => 'gallery', 'namespace' => 'gallery'], function () {
        Route::get('/index', 'GalleryController@index');
    });

    // Award
    Route::group(['prefix' => 'penghargaan', 'namespace' => 'penghargaan'], function () {
        Route::get('/award', 'AwardController@index');
    });

    // videos
    Route::group(['prefix' => 'videos', 'namespace' => 'videos'], function () {
        Route::get('/profil-universitas-pasundan', 'ProfilUniversitasPasundanController@index');
        Route::get('/pendaftaran-wisuda-online-UNPAS', 'PendaftaranWisudaController@index');
    });
});

//route untuk backend
Route::group(['namespace' => 'backend'], function () {
    Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'admin']], function () {
        Route::post('/images', 'PostController@uploadImage')->name('post.image');
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
        Route::group(['prefix' => 'profil', 'namespace' => 'profil'], function () {
            Route::get('/dosen', 'DosenController@index')->name('backend.profil.dosen.index');
            Route::post('/dosen-store', 'DosenController@store')->name('backend.profil.dosen.store');
            Route::get('/lulusan', 'LulusanController@index')->name('backend.profil.lulusan.index');
            Route::post('/lulusan-store', 'LulusanController@store')->name('backend.profil.lulusan.store');
            Route::get('/mahasiswa', 'MahasiswaController@index')->name('backend.profil.mahasiswa.index');
            Route::post('/mahasiswa-store', 'MahasiswaController@store')->name('backend.profil.mahasiswa.store');
            Route::get('/organisasi', 'OrganisasiController@index')->name('backend.profil.organisasi.index');
            Route::post('/organisasi-store', 'OrganisasiController@store')->name('backend.profil.organisasi.store');
            Route::get('/sarana', 'SaranaController@index')->name('backend.profil.sarana.index');
            Route::post('/sarana-store', 'SaranaController@store')->name('backend.profil.sarana.store');
            Route::get('/sejarah', 'SejarahController@index')->name('backend.profil.sejarah.index');
            Route::post('/sejarah-store', 'SejarahController@store')->name('backend.profil.sejarah.store');
            Route::get('/visimisi', 'VisiMisiController@index')->name('backend.profil.visimisi.index');
            Route::post('/visimisi-store', 'VisiMisiController@store')->name('backend.profil.visimisi.store');
        });
        Route::group(['prefix' => 'pendaftaran', 'namespace' => 'pendaftaran'], function () {
            Route::get('/doctoral', 'DoctoralController@index')->name('backend.pendaftaran.doctoral.index');
            Route::post('/doctoral-store', 'DoctoralController@store')->name('backend.pendaftaran.doctoral.store');
            Route::get('/magang', 'MagangController@index')->name('backend.pendaftaran.magang.index');
            Route::post('/magang-store', 'MagangController@store')->name('backend.pendaftaran.magang.store');
            Route::get('/magister', 'MagisterController@index')->name('backend.pendaftaran.magister.index');
            Route::post('/magister-store', 'MagisterController@store')->name('backend.pendaftaran.magister.store');
            Route::get('/pelatihan', 'PelatihanController@index')->name('backend.pendaftaran.pelatihan.index');
            Route::post('/pelatihan-store', 'PelatihanController@store')->name('backend.pendaftaran.pelatihan.store');
            Route::get('/postdoctoral', 'PostDoctoralController@index')->name('backend.pendaftaran.postdoctoral.index');
            Route::post('/postdoctoral-store', 'PostDoctoralController@store')->name('backend.pendaftaran.postdoctoral.store');
            Route::get('/sarjana', 'SarjanaController@index')->name('backend.pendaftaran.sarjana.index');
            Route::post('/sarjana-store', 'SarjanaController@store')->name('backend.pendaftaran.sarjana.store');
        });
        Route::group(['prefix' => 'program', 'namespace' => 'program'], function () {
            Route::get('/beasiswa', 'BeasiswaController@index')->name('backend.program.beasiswa.index');
            Route::post('/beasiswa-store', 'BeasiswaController@store')->name('backend.program.beasiswa.store');
            Route::get('/doctoral', 'DoctoralController@index')->name('backend.program.doctoral.index');
            Route::post('/doctoral-store', 'DoctoralController@store')->name('backend.program.doctoral.store');
            Route::get('/magang', 'MagangController@index')->name('backend.program.magang.index');
            Route::post('/magang-store', 'MagangController@store')->name('backend.program.magang.store');
            Route::get('/magister', 'MagisterController@index')->name('backend.program.magister.index');
            Route::post('/magister-store', 'MagisterController@store')->name('backend.program.magister.store');
            Route::get('/pelatihan', 'PelatihanController@index')->name('backend.program.pelatihan.index');
            Route::post('/pelatihan-store', 'PelatihanController@store')->name('backend.program.pelatihan.store');
            Route::get('/postdoctoral', 'PostDoctoralController@index')->name('backend.program.postdoctoral.index');
            Route::post('/postdoctoral-store', 'PostDoctoralController@store')->name('backend.program.postdoctoral.store');
            Route::get('/sarjana', 'SarjanaController@index')->name('backend.program.sarjana.index');
            Route::post('/sarjana-store', 'SarjanaController@store')->name('backend.program.sarjana.store');
        });
        Route::group(['prefix' => 'tridharma', 'namespace' => 'tridharma'], function () {
            Route::get('/layanan', 'LayananController@index')->name('backend.tridharma.layanan.index');
            Route::post('/layanan-store', 'LayananController@store')->name('backend.tridharma.layanan.store');
            Route::get('/pendidikan', 'PendidikanController@index')->name('backend.tridharma.pendidikan.index');
            Route::post('/pendidikan-store', 'PendidikanController@store')->name('backend.tridharma.pendidikan.store');
            Route::get('/penelitian', 'PenelitianController@index')->name('backend.tridharma.penelitian.index');
            Route::post('/penelitian-store', 'PenelitianController@store')->name('backend.tridharma.penelitian.store');
            Route::get('/pengabdian', 'PengabdianController@index')->name('backend.tridharma.pengabdian.index');
            Route::post('/pengabdian-store', 'PengabdianController@store')->name('backend.tridharma.pengabdian.store');
        });
        // Route::resource('berita', 'BeritaController');
        Route::group(['prefix' => 'berita', 'namespace' => 'berita'], function () {
            Route::get('/', 'BeritaController@index')->name('berita.index');
            Route::get('create', 'BeritaController@create')->name('berita.create');
            Route::get('{id}/edit', 'BeritaController@edit')->name('berita.edit');
            Route::get('destroy/{id}', 'BeritaController@destroy')->name('berita.delete');
            Route::post('berita/store', 'BeritaController@store')->name('berita.store');
            Route::post('berita/update', 'BeritaController@update')->name('berita.update');
        });
    });
});

Auth::routes(['register' => false , 'reset' => false]);
