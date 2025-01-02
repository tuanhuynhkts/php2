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
    return view('admins.provinces.index');
});

// Route::get('/provinces', 'ProvinceController@index')->name('provinces.index');


use App\Http\Controllers\ProvinceController;

Route::get('/provinces', [ProvinceController::class, 'index'])->name('provinces.index');
Route::get('/provinces/create', [ProvinceController::class, 'create'])->name('provinces.create');
Route::post('/provinces/store', [ProvinceController::class, 'store'])->name('provinces.store');
