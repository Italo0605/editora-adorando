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
    return view('layouts.default');
})->name("home");
Route::get('/music', [MusicController::class, 'index'])->name("musicsList");

Route::get('/music/{id}', [MusicController::class, 'getMusic'])->name("getMusic");
