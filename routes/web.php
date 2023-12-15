<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\MusicController;

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
    return view('welcome');
})->name("home");
Route::get('/form', function () {
    return view('FormPage');
})->name("form-page");
Route::get('/mail', function () {
    return view('MailPage');
})->name("mail-page");
Route::get('/music', [MusicController::class, 'index'])->name("music");

Route::get('/music/{id}', [MusicController::class, 'getMusic'])->name("music");
Route::get('/search',[MusicController::class, 'search']);