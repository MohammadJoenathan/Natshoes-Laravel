<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BahanBakuController;
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

