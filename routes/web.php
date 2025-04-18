<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadImageController;
use Illuminate\Support\Facades\Auth;
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

/* 
--------------------------------------------------------------------------

--------------------------------------------------------------------------
*/

	Route::get('/', [App\Http\Controllers\KosController::class, 'index'])->name('udakost');
	Route::get('daftar-kos', [App\Http\Controllers\KamarController::class, 'kost'])->name('list.kos');
	Route::get('caridaftar-kos', [App\Http\Controllers\KamarController::class, 'carikost'])->name('cari.kos');
	
	Route::get('/kamar-kos/{id}', [App\Http\Controllers\KamarController::class, 'show'])->name('ke.kamar');
	
	Auth::routes();
	
/* 
--------------------------------------------------------------------------
BAGIAN ADMIN
--------------------------------------------------------------------------
*/

	//Route::group(['middleware' => ['auth','is_admin'],'prefix' => 'admin','as' => 'admin.'],function () {
Route::middleware('auth')->group(function () {

	Route::get('/home', [HomeController::class, 'index'])->name('home');
			
 	// Penghuni
	
    Route::get('/penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'index'])->name('admin.penyewa.index');
	Route::get('/add-penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'create'])->name('admin.penyewa.create');
	Route::post('/add-penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'store'])->name('admin.penyewa.store');
	Route::get('/edit-penyewa/{id}', [App\Http\Controllers\Admin\PenyewaController::class, 'edit'])->name('admin.penyewa.edit');
	Route::post('/update-penyewa/{id}', [App\Http\Controllers\Admin\PenyewaController::class, 'update'])->name('admin.penyewa.update');
	Route::get('/delete-penyewa/{id}', [App\Http\Controllers\Admin\PenyewaController::class, 'destroy'])->name('admin.penyewa.destroy');
	Route::get('/cari-penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'cari'])->name('admin.penyewa.cari');
	
	// pemilik
	
	Route::get('/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index'])->name('admin.pemilik.index');
	Route::get('/add-pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'create'])->name('admin.pemilik.create');
	Route::post('/add-pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'store'])->name('admin.pemilik.store');
	Route::get('/edit-pemilik/{id}', [App\Http\Controllers\Admin\PemilikController::class, 'edit'])->name('admin.pemilik.edit');
	Route::post('/update-pemilik/{id}', [App\Http\Controllers\Admin\PemilikController::class, 'update'])->name('admin.pemilik.update');
	Route::get('/delete-pemilik/{id}', [App\Http\Controllers\Admin\PemilikController::class, 'destroy'])->name('admin.pemilik.destroy');
	Route::get('/cari-pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'cari'])->name('admin.pemilik.cari');
	
	// kos

	//Route::resource('kos', App\Http\Controllers\Admin\KosController::class);

	Route::get('/kos', [App\Http\Controllers\Admin\KosController::class, 'index'])->name('admin.kos.index');
	Route::get('/add-kos', [App\Http\Controllers\Admin\KosController::class, 'create'])->name('admin.kos.create');
	Route::post('/add-kos', [App\Http\Controllers\Admin\KosController::class, 'store'])->name('admin.kos.store');
	Route::get('/edit-kos/{id}', [App\Http\Controllers\Admin\KosController::class, 'edit'])->name('admin.kos.edit');
	Route::post('/update-kos/{id}', [App\Http\Controllers\Admin\KosController::class, 'update'])->name('admin.kos.update');
	Route::get('/delete-kos/{id}', [App\Http\Controllers\Admin\KosController::class, 'destroy'])->name('admin.kos.destroy');
	Route::get('/cari-kos', [App\Http\Controllers\Admin\KosController::class, 'cari'])->name('admin.kos.cari');
	
	// kamar
	
	Route::get('/kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'index'])->name('admin.kamar.index');
	Route::get('/add-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'create'])->name('admin.kamar.create');
	Route::post('/add-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'store'])->name('admin.kamar.store');
	Route::get('/edit-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'edit'])->name('admin.kamar.edit');
	Route::post('/update-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'update'])->name('admin.kamar.update');
	Route::get('/delete-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'destroy'])->name('admin.kamar.destroy');
	Route::get('cari-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'cari'])->name('admin.kamar.cari');
	
	// kamar-gambar
	Route::get('/kamar/{kamarId}/IMG', [App\Http\Controllers\Admin\KamarGambarController::class, 'index'])->name('gambar.kamar.index');
	Route::get('/kamar/{kamarId}/upload', [App\Http\Controllers\Admin\KamarGambarController::class, 'create'])->name('gambar.kamar.create');
	Route::post('/kamar/{kamarId}/upload', [App\Http\Controllers\Admin\KamarGambarController::class, 'upload'])->name('gambar.kamar.upload');
	Route::get('/kamar-img/{kamarImageId}', [App\Http\Controllers\Admin\KamarGambarController::class, 'destroy'])->name('gambar.kamar.destroy');
	
	// kontrak
	
	Route::get('/kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'index'])->name('kontrak.index');
	Route::get('/add-kontrak/{id?}', [App\Http\Controllers\Admin\KontrakController::class, 'create'])->name('kontrak.create');
	Route::post('/add-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'store'])->name('kontrak.store');
	Route::get('/edit-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'edit'])->name('kontrak.edit');
	Route::post('/update-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'update'])->name('kontrak.update');
	Route::get('/delete-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'destroy'])->name('kontrak.destroy');
	Route::get('/cari-kontrak/{id}/cari', [App\Http\Controllers\Admin\KontrakController::class, 'cari'])->name('kontrak.cari');
	Route::get('/pilih-kos', [App\Http\Controllers\Admin\KontrakController::class, 'lihat'])->name('kontrak.lihat');
	Route::get('/status/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'status'])->name('kontrak.status');
	Route::post('/konfirmasi/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'konfirmasi'])->name('kontrak.konfirmasi');
	Route::get('/print/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'print'])->name('kontrak.print');
	Route::get('/tagih/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'tagih'])->name('kontrak.tagih');
	Route::post('/tagih/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'wa'])->name('kontrak.wa');
	Route::get('/download-pdf/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'download_pdf'])->name('kontrak.pdf');
	
	// laporan
	
	Route::get('/laporan', [App\Http\Controllers\Admin\LaporanController::class, 'index'])->name('laporan.index');
	Route::post('/filter_bulan', [App\Http\Controllers\Admin\LaporanController::class, 'filter_bulan']);
	Route::get('/laporan_pdf', [App\Http\Controllers\Admin\LaporanController::class, 'laporan_pdf'])->name('laporan.pdf');
	Route::get('/cari-laporan', [App\Http\Controllers\Admin\LaporanController::class, 'cari'])->name('laporan.cari');
	
	// img
	Route::get("/img/{img}", [UploadImageController::class, "index"]);

	Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});
	
	// });
	// Route::middleware('guest')->group(function() {
	// 	Route::get('/register', [AuthController::class, 'index'])->name('register');
	// 	Route::post('/register', [AuthController::class, 'store'])->name('register.process');	
	// 	Route::get('/login', [AuthController::class, 'login'])->name('login');
	// 	Route::post('/login', [AuthController::class, 'login_autentik'])->name('login.process');
	// });
