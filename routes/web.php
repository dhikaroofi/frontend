<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'actLogin'])->name('act.login');
Route::get('/logout', [LoginController::class, 'actLogout'])->name('act.logout');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/merchant/{merchantID}/outlet/list/', [HomeController::class, 'getOutletList'])->name('get.outletList');
Route::get('/merchant/{merchantID}/omzet/list/', [HomeController::class, 'getMerchantsReport'])->name('get.merchantReport');
Route::get('/outlet/{outletID}/omzet/list/', [HomeController::class, 'getOutletReport'])->name('get.outletReport');
