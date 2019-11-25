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
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello World';
});

// Route::get('/profile/{name}',function($name){
//     return 'Profile <br> My Name : '.$name;
// });

// // optional route parameters
// Route::get('/profile/{name?}',function($name=null){
//     return 'Profile <br> My Name : '.$name;
// });

// //optional route parameters with default
// Route::get('/profile/{name?}',function($name='Guest'){
//     return 'Profile <br> My Name : '.$name;
// });

// Route::get('/profile/{name}/{matakuliah}',function($name,$matkul){
//     return 'Profile <br> My Name : '.$name.'<br>'.$matkul.' : 90';
// });

// route with controller
Route::get('/profile','ProfileController@index');

// kolaborasi with view dan controller
Route::get('/profile/detail','ProfileController@detail');

Route::get('/profile/identitas','ProfileController@identitas');

Route::get('/profile/{nama}','ProfileController@nama');

//MATERI MIGRATION
// route menampilkan data order
Route::get('/order','OrderController@index');
//route menampilkan halaman form tambah dadta
Route::get('/order/create',function(){
    return view('order.create');
});
//route mengirim data di form atau proses penambahan data melalui form
Route::post('/order/creating','OrderController@creating');
//route delete data order
Route::get('/order/{id}/delete','OrderController@deleting');
//route untuk mrngarahkan ke form update
Route::get('/order/{id}/update','OrderController@update');
//route proses update data order
Route::post('/order/{id}/updating','OrderController@updating');


//belajar templating blade dan bootstrap
Route::get('/data','DataController@index');
Auth::routes();

// Route auth
Route::get('/home', 'HomeController@index')->name('home');
