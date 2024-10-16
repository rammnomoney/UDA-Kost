<?php


//use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\UploadImageController;
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

Route::get('/', function() {
    return view('welcome');
})->name('welcome');

Route::view('/fronten/house/index', '/fronten/house/index');


Route::view('/admins/dashboard/dashboard', '/admins/dashboard/dashboard');
//Route::get('/house', [HouseController::class, 'index'])
//   ->name('house')->middleware('auth');


// BAGIAN ADMIN
// Route::get('/', function () {
//     return redirect("/login");
// });

// Penyewa

// Route::middleware('auth')->group(function () {
	// daftarkan admin
	// Route::get('/register', [AuthController::class, 'index']);
	// Route::post('/register', [AuthController::class, 'store']);

    // Route lain yang memerlukan autentikasi
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/penyewa', [PenyewaController::class, 'index']);
	Route::get('/add-penyewa', [PenyewaController::class, 'create']);
	Route::post('/add-penyewa', [PenyewaController::class, 'store']);
	Route::get('/edit-penyewa/{id}', [PenyewaController::class, 'edit']);
	Route::post('/update-penyewa/{id}', [PenyewaController::class, 'update']);
	Route::get('/delete-penyewa/{id}', [PenyewaController::class, 'destroy']);
	Route::get('/cari-penyewa', [PenyewaController::class, 'cari']);

	// pemilik
	Route::get('/pemilik', [PemilikController::class, 'index']);
	Route::get('/add-pemilik', [PemilikController::class, 'create']);
	Route::post('/add-pemilik', [PemilikController::class, 'store']);
	Route::get('/edit-pemilik/{id}', [PemilikController::class, 'edit']);
	Route::post('/update-pemilik/{id}', [PemilikController::class, 'update']);
	Route::get('/delete-pemilik/{id}', [PemilikController::class, 'destroy']);
	Route::get('/cari-pemilik', [PemilikController::class, 'cari']);

	// kos
	Route::get('/kos', [KosController::class, 'index']);
	Route::get('/add-kos', [KosController::class, 'create']);
	Route::post('/add-kos', [KosController::class, 'store']);
	Route::get('/edit-kos/{id}', [KosController::class, 'edit']);
	Route::post('/update-kos/{id}', [KosController::class, 'update']);
	Route::get('/delete-kos/{id}', [KosController::class, 'destroy']);
	Route::get('/cari-kos', [KosController::class, 'cari']);

	// kamar
	Route::get('/kamar/{id}', [KamarController::class, 'index']);
	Route::get('/add-kamar/{id}', [KamarController::class, 'create']);
	Route::post('/add-kamar/{id}', [KamarController::class, 'store']);
	Route::get('/edit-kamar/{id}', [KamarController::class, 'edit']);
	Route::post('/update-kamar/{id}', [KamarController::class, 'update']);
	Route::get('/delete-kamar/{id}', [KamarController::class, 'destroy']);
	Route::post('/cari-kamar/{kos}', [KamarController::class, 'cari']);

	// kontrak
	Route::get('/kontrak/{id}', [KontrakController::class, 'index']);
	Route::get('/add-kontrak/{id?}', [KontrakController::class, 'create']);
	Route::post('/add-kontrak/{id}', [KontrakController::class, 'store']);
	Route::get('/edit-kontrak/{id}', [KontrakController::class, 'edit']);
	Route::post('/update-kontrak/{id}', [KontrakController::class, 'update']);
	Route::get('/delete-kontrak/{id}', [KontrakController::class, 'destroy']);
	Route::get('/cari-kontrak/{id}/cari', [KontrakController::class, 'cari']);
	Route::get('/pilih-kos', [KontrakController::class, 'lihat']);
	Route::get('/status/{id}', [KontrakController::class, 'status']);
	Route::post('/konfirmasi/{id}', [KontrakController::class, 'konfirmasi']);
	Route::get('/print/{id}', [KontrakController::class, 'print']);
	Route::get('/tagih/{id}', [KontrakController::class, 'tagih']);
	Route::post('/tagih/{id}', [KontrakController::class, 'wa']);
	Route::get('/download-pdf/{id}', [KontrakController::class, 'download_pdf']);

	// laporan
	Route::get('/laporan', [LaporanController::class, 'index']);
	Route::post('/filter_bulan', [LaporanController::class, 'filter_bulan']);
	Route::get('/laporan_pdf', [LaporanController::class, 'laporan_pdf']);
	Route::get('/cari-laporan', [LaporanController::class, 'cari']);
	
	// image
	Route::get("/img/{img}", [UploadImageController::class, "index"]);

	// dashboard    
	//Route::get('/dashboard', [DashboardController::class, 'index']);

	// auth
	// Route::get('/logout', [AuthController::class, 'logout']);
// });

// Route::middleware("guest")->group(function() {
// 	Route::get('/register', [AuthController::class, 'index']);
// 	Route::post('/register', [AuthController::class, 'store']);
// 	Route::get('/login', [AuthController::class, 'login'])->name('login');
// 	Route::post('/login', [AuthController::class, 'login_autentik']);
// });