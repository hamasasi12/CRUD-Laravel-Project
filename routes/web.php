<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.auth-login', ['type_menu' => '']);
});

Route::middleware(['auth'])->group(function () {

    Route::get('home', function () {
        return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
    })->name('home');
    Route::resource('user', UserController::class);

});

Route::get('/data-tugas', 'App\Http\Controllers\tugasController@index')->name('data-tugas');
Route::get('/create-data-tugas', 'App\Http\Controllers\tugasController@create')->name('create-data-tugas');
Route::post('/simpan-data-tugas', 'App\Http\Controllers\tugasController@store')->name('simpan-data-tugas');
Route::get('/edit-data-tugas/{id}', 'App\Http\Controllers\tugasController@edit')->name('edit-data-tugas');
Route::post('/update-data-tugas/{id}', 'App\Http\Controllers\tugasController@update')->name('update-data-tugas');
Route::get('/delete-data-tugas/{id}','App\Http\Controllers\tugasController@destroy')->name('delete-data-tugas');

// Route::get('/', function () {

//       return view('pages.app.dashboard-simpadu', ['type_menu'=> '']);

//   });

// Route::get('/login', function () {

//     return view('pages.auth.auth-login');

// })->name('login');
// Route::get('/register', function () {

//       return view('pages.auth.auth-register');

// })->name('register');
// Route::get('/forgot', function () {

//     return view('pages.auth.auth-forgot-password');

// })->name('forgot');
// Route::get('/reset', function () {

//     return view('pages.auth.auth-reset-password');

// })->name('reset');
