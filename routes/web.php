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
// Route::view('/admins/auth/register', '/admins/auth/register');
// Route::view('/admins/auth/login', '/admins/auth/login');

// form //
//Route::view('/fronten/form/index', '/fronten/form/index');
//Route::view('/admins/dashboard/dashboard', '/admins/dashboard/dashboard');

//Route::get('/house', [HouseController::class, 'index'])
//   ->name('house')->middleware('auth');

Route::get('/', function () {
	return view('welcome'); 
})->name('welcome');

	Route::get('daftar-kos', [App\Http\Controllers\KosController::class, 'index'])->name('list.kos');
	
	//Route::get('kamar-kos', [App\Http\Controllers\KamarController::class, 'index'])->name('home-kos');
	Route::get('/kamar-kos/{id}', [App\Http\Controllers\KamarController::class, 'show'])->name('ke.kamar');


	Auth::routes();

	//Route::view('index', 'index');
	//Route::view('show', 'fronten.house.show');

	Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
	
	// Route::group(['middleware' => ['auth','is_admin'],'prefix' => 'admin','as' => 'admin.'],function () {
		// Route::get('admin', [DashboardController::class, 'index'])->name('admins.dashboard.dashboard');
		// });
	
		
	// BAGIAN ADMIN
	
	//Route::group(['middleware' => ['auth','is_admin'],'prefix' => 'admin','as' => 'admin.'],function () {
Route::middleware('auth')->group(function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home');
			
 	// Penghuni
    Route::get('/penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'index']);
	Route::get('/add-penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'create']);
	Route::post('/add-penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'store']);
	Route::get('/edit-penyewa/{id}', [App\Http\Controllers\Admin\PenyewaController::class, 'edit']);
	Route::post('/update-penyewa/{id}', [App\Http\Controllers\Admin\PenyewaController::class, 'update']);
	Route::get('/delete-penyewa/{id}', [App\Http\Controllers\Admin\PenyewaController::class, 'destroy']);
	Route::get('/cari-penyewa', [App\Http\Controllers\Admin\PenyewaController::class, 'cari']);
	
	// pemilik
	
	Route::get('/pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'index']);
	Route::get('/add-pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'create']);
	Route::post('/add-pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'store']);
	Route::get('/edit-pemilik/{id}', [App\Http\Controllers\Admin\PemilikController::class, 'edit']);
	Route::post('/update-pemilik/{id}', [App\Http\Controllers\Admin\PemilikController::class, 'update']);
	Route::get('/delete-pemilik/{id}', [App\Http\Controllers\Admin\PemilikController::class, 'destroy']);
	Route::get('/cari-pemilik', [App\Http\Controllers\Admin\PemilikController::class, 'cari']);
	
	// kos
	//Route::resource('kos', App\Http\Controllers\Admin\KosController::class);

	Route::get('/kos', [App\Http\Controllers\Admin\KosController::class, 'index']);
	Route::get('/add-kos', [App\Http\Controllers\Admin\KosController::class, 'create']);
	Route::post('/add-kos', [App\Http\Controllers\Admin\KosController::class, 'store']);
	Route::get('/edit-kos/{id}', [App\Http\Controllers\Admin\KosController::class, 'edit']);
	Route::post('/update-kos/{id}', [App\Http\Controllers\Admin\KosController::class, 'update']);
	Route::get('/delete-kos/{id}', [App\Http\Controllers\Admin\KosController::class, 'destroy']);
	// Route::get('/cari-kos', [App\Http\Controllers\Admin\KosController::class, 'cari']);
	
	// kamar
	
	Route::get('/kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'index']);
	Route::get('/add-kamar', [App\Http\Controllers\Admin\KamarController::class, 'create']);
	Route::post('/add-kamar', [App\Http\Controllers\Admin\KamarController::class, 'store']);
	Route::get('/edit-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'edit']);
	Route::post('/update-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'update']);
	Route::get('/delete-kamar/{id}', [App\Http\Controllers\Admin\KamarController::class, 'destroy']);
	Route::post('/cari-kamar/{kos}', [App\Http\Controllers\Admin\KamarController::class, 'cari']);
	
	// kontrak
	
	Route::get('/kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'index']);
	Route::get('/add-kontrak/{id?}', [App\Http\Controllers\Admin\KontrakController::class, 'create']);
	Route::post('/add-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'store']);
	Route::get('/edit-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'edit']);
	Route::post('/update-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'update']);
	Route::get('/delete-kontrak/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'destroy']);
	Route::get('/cari-kontrak/{id}/cari', [App\Http\Controllers\Admin\KontrakController::class, 'cari']);
	Route::get('/pilih-kos', [App\Http\Controllers\Admin\KontrakController::class, 'lihat']);
	Route::get('/status/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'status']);
	Route::post('/konfirmasi/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'konfirmasi']);
	Route::get('/print/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'print']);
	Route::get('/tagih/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'tagih']);
	Route::post('/tagih/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'wa']);
	Route::get('/download-pdf/{id}', [App\Http\Controllers\Admin\KontrakController::class, 'download_pdf']);
	
	// laporan
	
	Route::get('/laporan', [App\Http\Controllers\Admin\LaporanController::class, 'index']);
	Route::post('/filter_bulan', [App\Http\Controllers\Admin\LaporanController::class, 'filter_bulan']);
	Route::get('/laporan_pdf', [App\Http\Controllers\Admin\LaporanController::class, 'laporan_pdf']);
	Route::get('/cari-laporan', [App\Http\Controllers\Admin\LaporanController::class, 'cari']);
	
	// image
	Route::get("/img/{img}", [UploadImageController::class, "index"]);
});
	// dashboard    
	//Route::get('/dashboard', [DashboardController::class, 'index']);
	// auth
	// Route::get('/register', [AuthController::class, 'index']);
	// Route::post('/register', [AuthController::class, 'store']);
	
	// });
	// Route::middleware('guest')->group(function() {
	// 	Route::get('/register', [AuthController::class, 'index'])->name('register');
	// 	Route::post('/register', [AuthController::class, 'store'])->name('register.process');	
	// 	Route::get('/login', [AuthController::class, 'login'])->name('login');
	// 	Route::post('/login', [AuthController::class, 'login_autentik'])->name('login.process');
	// });
