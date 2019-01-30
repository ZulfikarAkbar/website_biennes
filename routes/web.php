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

Route::get('/', 'AdminController@welcome');

Route::group(['middleware'=>['Admin']],function(){
    //Route::get('/admin', 'JadwalController@create');
    Route::resource('jadwals', 'JadwalController');
    Route::resource('penggunas', 'PenggunaController');
    //Route::resource('materi', 'MateriController');

// masuk ke halaman nama soal
    //lihat nama soal
    Route::get('/materi', 'MateriController@show_materi');
    //buat nama soal
    Route::get('/materi/create_materi', 'MateriController@create_materi');
    Route::post('/materi', 'MateriController@store_materi');
    //edit nama soal
    Route::get('/materi/{id}/update_materi', 'MateriController@edit_materi');
    Route::put('/materi/{id}', 'MateriController@update_materi');
    //hapus nama soal
    Route::delete('/materi/{id}', 'MateriController@destroy_materi');

// masuk ke halaman soal mc
    //buat soal mc
    Route::get('soal/admin/create_soal/create/{id}', 'MateriController@create_soal');
    Route::post('soal/admin/{id}', 'MateriController@store_soal');
    //edit soal mc
    Route::get('soal/admin/update_soal/edit/{id}/{no}', 'SoalController@edit_soal');
    Route::put('soal/{id}/{no}', 'SoalController@update_soal');
    //
    Route::get('soal/admin/{id}', 'MateriController@show_edit_soal');
    //hapus soal mc
    Route::delete('soal/admin/delete_soal/{id}/{no}', 'SoalController@destroy_soal');
    


    //Route::resource('materi/create_pertanyaan', 'MateriController@create_pertanyaan');
    //Route::resource('pertanyaan', 'PertanyaanController');
    //Route::resource('buat_soal', 'buat_MateriController');
    
});
Route::group(['middleware'=>['auth']],function(){
    //Route::get('/admin', 'JadwalController@create');
    Route::resource('belajars', 'BelajarController');
    Route::get('/soal', 'MateriController@index_soal');
    Route::get('/soal/{id}', 'MateriController@show_soal');
    Route::post('/soal/{materi_id}/{id_user}', 'nilai_siswa_controller@nilai');
    // Route::get('/jawaban_pembahasan_nilai/{id}', 'nilai_siswa_controller@show_nilai');
    //Route::get('');
    //Route::resource('quizs', 'QuizController');
    //Route::resource('videos', 'VideoController');
    //Route::get('belajars','BelajarController@downloaddata');
    /*
    Route::get('upload_materi/{file_name}', function($file_name = null)
    {
        $path = storage_path().'/upload_materi/'.$file_name;
        if (file_exists($path)) {
            return Response::download($path);
        }
    });
    */
});



Auth::routes(['verify' => true]);

Route::get('refresh_captcha', 'LoginController@refreshCaptcha')->name('refresh_captcha');
Route::get('refresh_captcha', 'RegisterController@refreshCaptcha')->name('refresh_captcha');

Route::get('/contact', 'Contact@showContactForm');
Route::post('/contact', 'Contact@sendMail');

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('jadwals','JadwalController');
//Route::post('/jadwals/create', "JadwalController@store");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
