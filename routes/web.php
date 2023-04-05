<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/news/{id}', function ($id) {
    return view('news', ['id' => $id]);
});

Route::prefix('product')->group(function () {
    Route::get('/anu', function () {
        return view('product');
    });
});

Route::prefix('program')->group(function () {
    Route::get('/D4', function () {
        return view('program');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\WargaController::class, 'index']);

Route::resource('contact-us', ContactUsController::class)->only(['index']);

//nomor 2
Route::view('/awal','home');

Route::view('/pengalaman','pengalaman');

Route::get('/profil/{nama}', function ($nama) {
    return view('profil', ['nama' => $nama]);
});

