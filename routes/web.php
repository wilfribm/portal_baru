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

use App\Http\Controllers\RegisCobaController;
use Illuminate\Support\Facades\Route;


// Route::get("user", [RegisCobaController::class, 'create']);

// Route::post("user/create", [RegisCobaController::class, 'store']);

Route::get('/user','Auth\RegisCobaController@create');
Route::post('/user/create','Auth\RegisCobaController@store');

Route::get('/cari', 'PetaniProfileController@loadData');

Route::get('searchajax',array('as'=>'searchajax','uses'=>'PetaniController@autoComplete'));


Route::get('/ajax-autocomplete-search', [PetaniProfileController::class, 'selectSearch']);


Route::get('/', function () {
    return view('landing_page/index');
});
Route::get('/','landingpageController@index');

Route::get('/login', function () {
    return view('auth/login');
});

// Route::get('pengajar/dashboard',function(){
//     return view('pengajar/dashboard');
// });
Route::get('pengajar/upload_materi',function(){
    return view('pengajar/upload_materi');
});
// Route ADMIN
Route::resource('admin/pertanyaan', 'PertanyaanController');
Route::resource('admin/pengajar', 'PengajarController');
Route::resource('admin/kategori', 'KategoriController');
Route::resource('admin/approval', 'ApprovalController');

// Route::get('pengajar/upload_topik',function(){
//     return view('pengajar/upload_topik');
// });
Route::get('pengajar/peserta',function(){
    return view('pengajar/peserta');
});
Route::get('pengajar/topik',function(){
    return view('pengajar/topik');
});
Route::get('pengajar/materi',function(){
    return view('pengajar/materi');
});
Route::get('pengajar/indextopik',function(){
    return view('pengajar/indextopik');
});
Route::get('pengajar/indexmateri',function(){
    return view('pengajar/indexmateri');
});
Route::get('pengajar/editmateri', function () {
    return view('pengajar/editmateri');
 });
Auth::routes();
//Route::post('/login','Auth\LoginController@login')
Route::get('/pengajar/dashboard', 'Auth\LoginController@index');
// Route::get('/register','Auth\RegisterController@getprovinsi');
Route::post('/register','Auth\RegisterController@daftar_baru');
Route::post('/register/admin','Auth\RegisterController@daftar_baru_admin');
Route::post('/login','Auth\LoginController@loginBiasa');
Route::get('/logout', 'Auth\LoginController@logout');
 //fungsi cek user
 Route::get('/webdutatani/public/pengajar/indexmateri', 'ceklogin@materi');
 Route::get('/webdutatani/public/pengajar/indextopik', 'ceklogin@topik');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pengajar/upload_topik', 'TopikController@katmenu');

Route::post('/pengajar/upload_topik', 'TopikController@topikinput');
Route::get('/pengajar/indextopik', 'TopikController@katindex');
Route::get('/pengajar/upload_materi', 'MateriController@matmenu');
Route::post('/pengajar/upload_materi', 'MateriController@materiupload');
Route::get('/pengajar/indexmateri', 'MateriController@materiindex');

Route::get('/pengajar/editmateri/{ID}','MateriController@edit');
// Route::get('/pengajar/editmateri/{ID}','MateriController@update');
Route::post('/pengajar/indexmateri/update','MateriController@update');
Route::get('/pengajar/indexmateri/destroy/{id}', 'MateriController@destroy');

Route::get('/pengajar/edittopik/{ID}','TopikController@edit');
Route::post('/pengajar/indextopik/update','TopikController@update');
Route::get('/pengajar/indextopik/destroy/{id}', 'TopikController@destroy');

 Route::get('/pengajar/dashboard', 'DasboardController@index');
 Route::get('/pengajar/topik/{id}','DasboardController@edit');
 Route::get('/pengajar/materi/{id}','DasboardController@showMateri');

 Route::get('/pengajar/DetailMateri/{ID}','DasboardController@DetailMateri');
//  Route::get('../materipengajar/{{$materi->dokumen}}');
Route::get('materi_public/{ID}','DasboardController@MateriPublic');
Route::get('pengajar/profile','ProfileController@Profile');
Route::get('/pengajar/ubahprofil/{id}','ProfileController@ubahprofil');
Route::post('/pengajar/updateprofile/{id}','ProfileController@update_profile');

// Route::get('/updateprofile/ambilProvinsi/{id}','ProfileController@ubahprofil');
// Route::post('/pengajar/ubahprofil/ambilKabupaten/','ProfileController@ambilKabupaten');
// Route::post('ambilKecamatan/','ProfileController@ambilKecamatan');
//Route::post('/pengajar/ubahprofil/ambilKelurahan/','ProfileController@ambilKelurahan');
Route::post('kabupaten','ProfileController@getKabupaten');
Route::post('kecamatan','ProfileController@getKecamatan');
Route::post('kelurahan_desa','ProfileController@getDesa');
// Route::get('pengajar/indexpertanyaan', function () {
//     return view('pengajar/indexpertanyaan');
//  });
Route::get('pengajar/indexpertanyaan','PertanyaanController@pengajarlihatpertanyaan');
Route::get('pengajar/indexpertanyaan/menjawab/{ID}','PertanyaanController@jawabpertanyaan');
Route::post('/pengajar/indexpertanyaan/simpan','PertanyaanController@simpan');
Route::get('/pengajar/peserta','DasboardController@lihatpeserta');



//DARI SI PETANI ADMIN
Route::get('admin/wilayah/show','WilayahController@wilayah_show');
Route::get('admin/wilayah/tambah/kecamatan','WilayahController@tambah_kecamatan');
Route::get('admin/daftar/petani','PetaniController@daftar_petani');
Route::get('admin/daftar/petani/semua','PetaniController@daftar_petani_semua');

Route::get('detail/{id}','PetaniController@detail_petani');



Route::get('ubah/{id}','PetaniController@ubah_petani');
Route::post('update/{id}','PetaniController@ubah_petani_aksi');

Route::get('hapus/{id}','PetaniController@hapus');

Route::get('/cari/petani/','PetaniController@daftar_petani_semua');

Route::get('cetak/{id}','PetaniController@cetak');


Route::get('reset/password/{id}','PetaniController@reset_password');
Route::post('reset/{id}','PetaniController@reset');
Route::get('refresh/{id}','PetaniController@refresh_user');


//HALAMAN PETANI
Route::get('petani/dashboard_petani','PetaniController@dashboard_petani');


Route::get('data/diri/{id}','PetaniProfileController@data_diri_petani');

Route::get('ubah/profile/{id}','PetaniProfileController@ubah_profile');

Route::post('petani_kabupaten','PetaniProfileController@getKabupaten');
Route::post('petani_kecamatan','PetaniProfileController@getKecamatan');
Route::post('petani_kelurahan_desa','PetaniProfileController@getDesa');
Route::post('/update/profile/{id}','PetaniProfileController@update_profile');

Route::get('lahan/petani/{id}','PetaniProfileController@lahan_petani');
Route::get('detail/lahan/{id}','PetaniProfileController@detail_lahan_petani');
Route::get('cetak/petani/{id}','PetaniProfileController@cetak_petani');

Route::get('ganti/password/{id}','PetaniProfileController@ganti_password');
Route::post('ganti/{id}','PetaniProfileController@ganti');

//BERITA
Route::get('admin/berita', 'BeritaController@index');
Route::get('admin/berita/tambah', 'BeritaController@tambah');
Route::get('admin/berita/{id}','BeritaController@show');
Route::resource('berita', 'BeritaController');
Route::get('admin/berita/{id}/edit', 'BeritaController@edit');

//SLIDESHOW
Route::get('admin/slide', 'slideController@index');
Route::get('admin/slide/tambah', 'slideController@tambah');
Route::get('admin/slide/{id}','slideController@show');
Route::resource('slide', 'slideController');
Route::get('admin/slide/{id}/edit', 'slideController@edit');

Route::get('/listBerita','landingpageController@listBerita');
Route::get('/listBerita/detailBerita/{id}','landingpageController@detailBerita');

Route::get('/listMateri','landingpageController@listMateri');
Route::get('/listMateri/cariMateri','landingpageController@listMateri');
Route::get('/listMateri/detailMateri/{ID}','landingpageController@detailmateri');

Route::get('/profil', function () {
    return view('landing_page/profil');
});

//PEMETAAN
Route::get('admin/lihatpeta', 'MappingController@index');