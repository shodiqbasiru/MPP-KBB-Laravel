<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgetpassController;
use App\Http\Controllers\DashboardProfilController;

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

Route::get('/', [HomeController::class, 'index']);
// login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::Post('/login', [LoginController::class, 'authenticate']);
Route::Post('/logout', [LoginController::class, 'logout']);
// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
// dashboard profil
Route::resource('/dashboard/profil', DashboardProfilController::class)->middleware('auth');
// dashboard bak data
Route::get('/dashboard/bankdata', function() {
    return view('dashboard.bankdata');
})->middleware('auth');
Route::get('/dashboard/dokpribadi', function() {
    return view('dashboard.dokpribadi');
})->middleware('auth');
// fitur
Route::get('/forgetpass', [ForgetpassController::class, 'index']);
Route::get('/profil-mpp', [FeaturesController::class, 'profilmpp']);
Route::get('/antrian', [FeaturesController::class, 'antrian']);
Route::get('/monitoring', [FeaturesController::class, 'monitoring']);
Route::get('/survey', [FeaturesController::class, 'survey']);
Route::get('/pengaduan', [FeaturesController::class, 'pengaduan']);
// layanan
Route::get('/layanans', [LayananController::class, 'index']);
Route::get('/layanans/{tenant:slug}', [LayananController::class, 'show']);
// layanan controller resource
// Route::resource('/layanan/disdukcapil/pengajuan-online', PengajuanController::class)->middleware('auth');
