<?php

use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeluarBarangController;
use App\Http\Controllers\Master\BrandController;
use App\Http\Controllers\Master\CategoryController;
use App\Http\Controllers\Master\UomController;
use App\Http\Controllers\MasterDataBarangController;
use App\Http\Controllers\Report\ReportBarangKeluarController;
use App\Http\Controllers\Report\ReportStokController;
use App\Http\Controllers\Report\ReportTerimaBarangController;
use App\Http\Controllers\TerimaBarangController;
use App\Models\MasterDataBarang;
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

Route::get('/', fn () => redirect()->route('dashboard.index'));

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ["roles:admin,manager,operator"]], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('/master-data-barang', MasterDataBarangController::class);
    Route::resource('/terima-barang', TerimaBarangController::class);
    Route::resource('/keluar-barang', KeluarBarangController::class);
});

Route::group(['prefix' => 'admin', 'middleware' => ["roles:admin"]], function () {
    Route::resource('/manage-user', ManageUserController::class);
});

Route::group(['prefix' => 'report', 'middleware' => ['roles:manager,operator']], function () {
    Route::get('/stok', [ReportStokController::class, 'index'])->name('report-stok.index');
    Route::get('/stok/export_excel', [ReportStokController::class, 'exportExcel'])->name('report-stok.export-excel');

    Route::get('/terima-barang', [ReportTerimaBarangController::class, 'index'])->name('report-terima-barang.index');
    Route::get('/terima-barang/export_excel', [ReportTerimaBarangController::class, 'exportExcel'])->name('terima-barang.export-excel');

    Route::get('/keluar-barang', [ReportBarangKeluarController::class, 'index'])->name('report-barang-keluar.index');
    Route::get('/keluar-barang/export_excel', [ReportBarangKeluarController::class, 'exportExcel'])->name('keluar-barang.export-excel');
});

Route::group(['prefix' => 'master', 'middleware' => ['roles:operator']], function () {
    Route::resource('/category', CategoryController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/uom', UomController::class);
});
