<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

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

Route::post('/login', [AuthController::class, 'login']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/add', [BarangController::class, 'viewAdd']);
Route::post('/barang/action-add', [BarangController::class, 'actionAdd']);
Route::get('/barang/edit/{id}', [BarangController::class, 'viewEdit']);
Route::post('/barang/action-edit', [BarangController::class, 'actionEdit']);
Route::get('/barang/delete/{id}', [BarangController::class, 'actionDelete']);