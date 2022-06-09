<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_embako;
use App\Http\Controllers\C_Mitra;
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

Route::get('/dokumentasi', [C_embako::class, 'dokumentasi']);

// Landing Page
Route::get('/', [C_embako::class, 'landing']);


// Customer
Route::get('/login', [C_embako::class, 'login']);
Route::post('/login', [C_embako::class, 'authenticate']);
Route::get('/registrasi', [C_embako::class, 'registrasi']);
Route::post('/registrasi', [C_embako::class, 'store']);
Route::get('/dashboard_customer/{idCustomer}', [C_embako::class, 'dashboard_Customer']);
Route::get('/pesanan/{pesanan:id}', [C_embako::class, 'pesanan']);
Route::get('/detailProduk/{product:title}', [C_embako::class, 'detailProduk']);
Route::get('/detailMitra/{user:id}', [C_embako::class, 'detailMitra']);
Route::get('/detailUlasan/{ulasan:id}', [C_embako::class, 'detailUlasan']);
Route::get('/tambahUlasan/{ulasan:id}', [C_embako::class, 'tambahUlasan']);
Route::post('/storeUlasan/{ulasan:id}', [C_embako::class, 'storeUlasan']);


// Mitra
Route::get('/registrasiMitra', [C_Mitra::class, 'registrasiMitra'])->middleware('guest');
Route::post('/registrasiMitra', [C_Mitra::class, 'store']);

Route::get('/loginMitra', [C_Mitra::class, 'loginMitra'])->middleware('guest');
Route::post('/loginMitra', [C_Mitra::class, 'authenticate']);

Route::get('/dashboardMitra', [C_Mitra::class, 'dashboardMitra']);
