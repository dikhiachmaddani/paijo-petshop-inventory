<?php

use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ["roles:admin,manager,operator"]], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['prefix' => 'admin', 'middleware' => ["roles:admin"]], function () {
    Route::resource('/manage-user', ManageUserController::class);
});

Route::group(['prefix' => 'report', 'middleware' => ['roles:manager,operator']], function () {
    // report
    Route::get('/stok', function () {
        return view('operator.report.stok.index');
    });
    Route::get('/terima-barang', function () {
        return view('operator.report.stok.index');
    });
    Route::get('/barang-keluar', function () {
        return view('operator.report.stok.index');
    });
});

Route::group(['prefix' => 'operator', 'middleware' => ["roles:operator"]], function () {
    Route::get('/master-data-barang', function () {
        return view('operator.master-data-barang.index');
    });
    Route::get('/barang-diterima', function () {
        return view('operator.barang-diterima.index');
    });
    Route::get('/barang-keluar', function () {
        return view('operator.barang-keluar.index');
    });
    Route::get('/master-category', function () {
        return view('operator.master-data-unit.category.index');
    });
    Route::get('/master-brand', function () {
        return view('operator.master-data-unit.brand.index');
    });
    Route::get('/master-uom', function () {
        return view('operator.master-data-unit.uom.index');
    });
});
