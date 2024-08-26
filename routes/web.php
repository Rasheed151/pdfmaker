<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ambilController;
use App\Http\Controllers\simpanController;

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
});
Route::resource('simpan', simpanController::class);
Route::resource('ambil', ambilController::class);
Route::get('/generate-pdf', [PDFController::class, 'make'])->name('generate.pdf');
Route::get('/generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('generate.pdf');