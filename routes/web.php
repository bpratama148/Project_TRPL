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

//halaman awal guest//
Route::get('/','PageController@guest')->middleware('guest');


//login//
Route::get('/login','LoginController@index'); 
Route::post('/postlogin','LoginController@login'); 

//logout//
Route::get('/logout','LoginController@logout'); 

//daftar//
Route::get('/daftar','DaftarController@index');
Route::post('/daftar','DaftarController@store');

//Admin//
Route::get('/admin','AdminController@index')->middleware('auth:admin'); 
Route::get('/web','AdminController@web'); 
Route::get('/mainartikel','AdminController@artikel'); 


//Admin-Artikel//

Route::post('/artikel/{id}/update','ArtikelController@update');
Route::get('/artikel/create','ArtikelController@create');
Route::post('/artikel','ArtikelController@store');
Route::get('/artikel/{id}/edit','ArtikelController@edit');
Route::get('/artikel/{id}/delete','ArtikelController@delete');
Route::get('/artikelmore/{id}','ArtikelController@artikelmore');

//Admin- Data Dokter//
Route::get('/admin-dokter','AdminController@dokter'); 
Route::post('/dokter/{id}/update','DataDokterController@update');
Route::get('/dokter/create','DataDokterController@create');
Route::post('/dokter','DataDokterController@store');
Route::get('/dokter/{id}/edit','DataDokterController@edit');
Route::get('/dokter/{id}/delete','DataDokterController@delete');


//Admin-Forum//
Route::get('/admin-forum','AdminController@forum'); 
Route::get('/forum-admin','AdminController@adminforum');
Route::get('/forum/{id}/delete','ForumController@deleteadmin');
Route::get('/forum-more/{id}','ForumController@more');


//Admin-kuisioner//
Route::get('/admin-gejala','AdminController@gejala');
// Route::get('/admin-gejalaweb','AdminController@gejalaweb'); 
Route::post('/gejala/{id}/update','DiagnosaController@updategejala');
Route::get('/gejala/create','DiagnosaController@creategejala');
Route::post('/gejalacrud','DiagnosaController@storegejala');
Route::get('/gejala/{id}/edit','DiagnosaController@editgejala');
Route::get('/gejala/{id}/delete','DiagnosaController@deletegejala');

//Admin-Diagnosa//
Route::get('/admin-diagnosa','DiagnosaController@diagnosa');
Route::post('/diagnosa/{id}/update','DiagnosaController@updatediagnosa');
Route::get('/diagnosa/create','DiagnosaController@creatediagnosa');
Route::post('/diagnosa','DiagnosaController@storediagnosa');
Route::get('/diagnosa/{id}/edit','DiagnosaController@editdiagnosa');
Route::get('/diagnosa/{id}/delete','DiagnosaController@deletediagnosa');

//pengguna//
Route::get('/pengguna','PenggunaController@index')->middleware('auth:pengguna');

//pengguna-artikel//
Route::get('/pengguna-artikel','PenggunaController@artikel')->middleware('auth:pengguna');
Route::get('/pengguna-artikelmore/{id}','PenggunaController@artikelmore')->middleware('auth:pengguna');

//pengguna-forum//
Route::get('/pengguna-forum','ForumController@index')->middleware('auth:pengguna');
Route::post('/forum','ForumController@store')->middleware('auth:pengguna');

//pengguna-mypost//
Route::get('/mypost/{pengguna}','MyPostController@index')->middleware('auth:pengguna')->name('mypost');
Route::get('/mypost/{id}/edit','ForumController@edit')->middleware('auth:pengguna');
Route::post('/mypost/{id}/update','ForumController@update')->middleware('auth:pengguna');
Route::get('/forumpengguna/{id}/delete','ForumController@delete')->middleware('auth:pengguna');

//pengguna-diagnosa//
Route::get('/pengguna-diagnosa','DiagnosaController@index')->middleware('auth:pengguna');
Route::get('/pengguna-dstart','DiagnosaController@start')->middleware('auth:pengguna');
Route::post('/gejala','DiagnosaController@store')->middleware('auth:pengguna');
Route::get('/user-hasildiagnosa','DiagnosaController@hasil')->middleware('auth:pengguna');
Route::get('/hasil/{id}/delete','DiagnosaController@deletehasil')->middleware('auth:pengguna');



//dokter//
Route::get('/dokter','DokterController@index')->middleware('auth:dokter');
//dokter-artikel//
Route::get('/dokter-artikel','DokterController@artikel')->middleware('auth:dokter');
Route::get('/dokter-artikelmore/{id}','DokterController@dokterartikelmore')->middleware('auth:dokter');

//dokter-forum//
Route::get('/dokter-forum','DokterController@forum')->middleware('auth:dokter'); 


//balas-forum Pengguna//
Route::get('/forum-balas/{id}','ForumController@balas')->middleware('auth:pengguna');
//balas-forum Dokter//
Route::get('/forum-balasdokter/{id}','ForumController@balasdokter')->middleware('auth:dokter');

//balas-pengguna//
Route::post('/komen/addComment/{forum}','CommentController@addcomment')->name('addComment')->middleware('auth:pengguna,dokter');





