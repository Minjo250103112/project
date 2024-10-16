<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('clients', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('package-type', [App\Http\Controllers\PackageTypeController::class, 'index'])->name('package-type');
Route::get('package', [App\Http\Controllers\PackageController::class, 'index'])->name('package');
Route::post('/insertdata',[ App\Http\Controllers\HomeController::class, 'insertdata'] )->name('insertdata');
Route::get('/tambahkategori',[App\Http\Controllers\HomeController::class, 'tambahkategori'] )->name('tambahkategori');
