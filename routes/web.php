<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('login');
});

// Route Register 
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route Login 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route Dashboard
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

// Route BahanBaku
Route::get('/BahanBaku', [BahanBakuController::class, 'index'])->name('BahanBaku');

Route::get('/BahanBaku/addform', [BahanBakuController::class, 'add'])->name('addBahanBaku');

Route::post('/BahanBaku/addform', [BahanBakuController::class, 'insertdata'])->name('insertBahanBaku');
    
Route::get('/BahanBaku/updateform/{id}', [BahanBakuController::class, 'readdata'])->name('readBahanBaku');

Route::get('/BahanBaku/allform/{id}', [BahanBakuController::class, 'viewdata'])->name('viewBahanBaku');
    
Route::post('/BahanBaku/updateform/{id}', [BahanBakuController::class, 'updatedata'])->name('updateBahanBaku');
    
Route::get('/BahanBaku/{id}', [BahanBakuController::class, 'deletedata'])->name('deleteBahanBaku');

Route::get('/pdf-BahanBaku', [BahanBakuController::class, 'exportpdf'])->name('pdfBahanBaku');

// Route Produksi
Route::get('/Produksi', [ProduksiController::class, 'index'])->name('Produksi');

Route::get('/Produksi/addform', [ProduksiController::class, 'add'])->name('addProduksi');

Route::post('/Produksi/addform', [ProduksiController::class, 'insertdata'])->name('insertProduksi');
    
Route::get('/Produksi/updateform/{id}', [ProduksiController::class, 'readdata'])->name('readProduksi');

Route::get('/Produksi/allform/{id}', [ProduksiController::class, 'viewdata'])->name('viewProduksi');
    
Route::post('/Produksi/updateform/{id}', [ProduksiController::class, 'updatedata'])->name('updateProduksi');
    
Route::get('/Produksi/{id}', [ProduksiController::class, 'deletedata'])->name('deleteProduksi');

Route::get('/pdf-Produksi', [ProduksiController::class, 'exportpdf'])->name('pdfProduksi');

// Route Pengiriman
Route::get('/Pengiriman', [PengirimanController::class, 'index'])->name('Pengiriman');

Route::get('/Pengiriman/addform', [PengirimanController::class, 'add'])->name('addPengiriman');

Route::post('/Pengiriman/addform', [PengirimanController::class, 'insertdata'])->name('insertPengiriman');
    
Route::get('/Pengiriman/updateform/{id}', [PengirimanController::class, 'readdata'])->name('readPengiriman');

Route::get('/Pengiriman/allform/{id}', [PengirimanController::class, 'viewdata'])->name('viewPengiriman');
    
Route::post('/Pengiriman/updateform/{id}', [PengirimanController::class, 'updatedata'])->name('updatePengiriman');
    
Route::get('/Pengiriman/{id}', [PengirimanController::class, 'deletedata'])->name('deletePengiriman');

Route::get('/pdf-Pengiriman', [PengirimanController::class, 'exportpdf'])->name('pdfPengiriman');
