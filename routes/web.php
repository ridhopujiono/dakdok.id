<?php
date_default_timezone_set('Asia/Jakarta');
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\ProyekController;
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
// Dashboard User
// Dashboard User
Route::get('/', [DashboardController::class, 'index']);
Route::get('/service', [DashboardController::class, 'service']);
Route::get('/form', [DashboardController::class, 'form']);
Route::get('/form/{judul_service}/{service}', [DashboardController::class, 'form']);
Route::post('/form', [DashboardController::class, 'form_from_service']);
Route::get('/form_proyek', [DashboardController::class, 'form_proyek']);
Route::get('/form_proyek/{judul_proyek}', [DashboardController::class, 'form_proyek']);
Route::get('/form_proyek_berhasil', [DashboardController::class, 'form_proyek_berhasil']);
Route::post('/post_form', [DashboardController::class, 'post_form']);
Route::post('/post_proyek', [DashboardController::class, 'post_proyek']);


Route::middleware('auth')->group(function(){
    // Dashboard admin
    Route::get('/login',[UserController::class, 'index'])->name('login')->withoutMiddleware('auth');
    Route::post('/login',[UserController::class, 'authenticate'])->withoutMiddleware('auth');
    Route::post('/ubah_password',[UserController::class, 'update_password_admin']);
    Route::delete('/hapus_user_admin/{id}',[UserController::class, 'hapus_user_admin']);
    Route::get('/utama',[AdminController::class, 'index'])->name('utama');
    Route::get('/get_jml',[AdminController::class, 'get_jml']);

    Route::post('/get_transaksi', [AdminController::class, 'get_transaksi']);
    Route::post('/ubah_status', [AdminController::class, 'ubah_status']);
    Route::post('/hapus_transaksi', [AdminController::class, 'hapus_transaksi']);
    Route::post('/get_detail', [AdminController::class, 'get_detail']);

    Route::get('/login_user', [UserController::class, 'login_user']);
    Route::get('/logout', [UserController::class, 'logout'])->withoutMiddleware('auth');

    // Iklan
    Route::get('/iklan',[IklanController::class, 'index']);
    Route::get('/tambah_iklan',[IklanController::class, 'create']);
    Route::get('/edit_iklan/{iklan}',[IklanController::class, 'edit']);
    Route::post('/tambah_iklan',[IklanController::class, 'store']);
    Route::post('/update_iklan/{iklan}',[IklanController::class, 'update']);
    Route::delete('/hapus_iklan/{iklan}',[IklanController::class, 'destroy']);


    // Proyek
    Route::get('proyek', [ProyekController::class, 'index']);
    Route::post('/ubah_status_proyek', [ProyekController::class, 'ubah_status_proyek']);
    Route::post('/hapus_proyek', [ProyekController::class, 'hapus_proyek']);
    Route::post('/get_detail_proyek', [ProyekController::class, 'get_detail_proyek']);
    Route::post('/get_transaksi_proyek', [ProyekController::class, 'get_transaksi_proyek']);

    //Manajemen Admin
    Route::get('/manajemen_admin', [UserController::class, 'manajemen_admin'])->middleware('is_master');
    Route::get('/tambah_admin', [UserController::class, 'tambah_admin'])->middleware('is_master');
    Route::post('/tambah_admin', [UserController::class, 'store_admin'])->middleware('is_master');
});
