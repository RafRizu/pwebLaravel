<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\SuperadminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::group(['middleware' => ['auth', 'checkrole:superadmin']], function () {
    // Definisi route untuk superadmin di sini

});

// Route untuk admin
Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    // Definisi route untuk admin di sini
});

// Route untuk user
Route::group(['middleware' => ['auth', 'checkrole:user']], function () {
    // Definisi route untuk user di sini
});
Route::get('/barang', [PostController::class,'index'])->name('index');
Route::get('/post/{post:slug}',[PostController::class,"detail"])->name('detail');


Route::get('/barang/create', [PostController::class,'create'])->name('create')->middleware(['auth', 'checkrole:user,admin,superadmin']);
Route::post('/barang/store', [PostController::class,'store'])->name('store')->middleware(['auth', 'checkrole:user,admin,superadmin']);
Route::get('/barang/edit/{brg:kd_brg}', [PostController::class,'edit'])->name('edit')->middleware(['auth', 'checkrole:admin,superadmin']);
Route::put('/barang/update/{brg:kd_brg}', [PostController::class,'update'])->name('update')->middleware(['auth', 'checkrole:admin,superadmin']);
Route::delete('/barang/delete/{kd_brg}', [PostController::class,'destroy'])->name('destroy')->middleware(['auth', 'checkrole:admin,superadmin']);

// Update Stok

Route::get('/stok/create', [PembelianController::class,'addStok'])->name('createStok')->middleware(['auth', 'checkrole:admin,superadmin']);
Route::post('/stok/store', [PembelianController::class,'storeStok'])->name('storeStok')->middleware(['auth', 'checkrole:admin,superadmin']);


// Laporan

Route::get('/laporan', [LaporanController::class,'index'])->name('laporan')->middleware(['auth', 'checkrole:superadmin']);

//Faktur

Route::get('/faktur/index', [SuperadminController::class,'index'])->name('indexFaktur')->middleware(['auth', 'checkrole:superadmin']);
Route::get('/faktur/create', [SuperadminController::class,'createFaktur'])->name('createFaktur')->middleware(['auth', 'checkrole:superadmin']);
Route::post('/faktur/store', [SuperadminController::class,'storeFaktur'])->name('storeFaktur')->middleware(['auth', 'checkrole:superadmin']);

require __DIR__.'/auth.php';
