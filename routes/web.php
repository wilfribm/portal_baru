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
// Route::get('pengajar/indexpertanyaan', function () {
//     return view('pengajar/indexpertanyaan');
//  });
Route::get('pengajar/indexpertanyaan','PertanyaanController@pengajarlihatpertanyaan');
Route::get('pengajar/indexpertanyaan/menjawab/{ID}','PertanyaanController@jawabpertanyaan');
Route::post('/pengajar/indexpertanyaan/simpan','PertanyaanController@simpan');
Route::get('/pengajar/peserta','DasboardController@lihatpeserta');

