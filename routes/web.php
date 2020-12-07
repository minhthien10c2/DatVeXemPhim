<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dinhdang', [App\Http\Controllers\DinhDangController::class, 'getDanhSach'])->name('dinhdang');
Route::get('/dinhdang/them', [App\Http\Controllers\DinhDangController::class, 'getThem'])->name('dinhdang.them');
Route::post('/dinhdang/them', [App\Http\Controllers\DinhDangController::class, 'postThem'])->name('dinhdang.them');
Route::get('/dinhdang/sua/{id}', [App\Http\Controllers\DinhDangController::class, 'getSua'])->name('dinhdang.sua');
Route::post('/dinhdang/sua/{id}', [App\Http\Controllers\DinhDangController::class, 'postSua'])->name('dinhdang.sua');
Route::get('/dinhdang/xoa/{id}', [App\Http\Controllers\DinhDangController::class, 'getXoa'])->name('dinhdang.xoa');

Route::get('/dinhdangphim', [App\Http\Controllers\DinhDangPhimController::class, 'getDanhSach'])->name('dinhdangphim');
Route::get('/dinhdangphim/them', [App\Http\Controllers\DinhDangPhimController::class, 'getThem'])->name('dinhdangphim.them');
Route::post('/dinhdangphim/them', [App\Http\Controllers\DinhDangPhimController::class, 'postThem'])->name('dinhdangphim.them');
Route::get('/dinhdangphim/sua/{id}', [App\Http\Controllers\DinhDangPhimController::class, 'getSua'])->name('dinhdangphim.sua');
Route::post('/dinhdangphim/sua/{id}', [App\Http\Controllers\DinhDangPhimController::class, 'postSua'])->name('dinhdangphim.sua');
Route::get('/dinhdangphim/xoa/{id}', [App\Http\Controllers\DinhDangPhimController::class, 'getXoa'])->name('dinhdangphim.xoa');

Route::get('/ghe', [App\Http\Controllers\GheController::class, 'getDanhSach'])->name('ghe');
Route::get('/ghe/them', [App\Http\Controllers\GheController::class, 'getThem'])->name('ghe.them');
Route::post('/ghe/them', [App\Http\Controllers\GheController::class, 'postThem'])->name('ghe.them');
Route::get('/ghe/sua/{id}', [App\Http\Controllers\GheController::class, 'getSua'])->name('ghe.sua');
Route::post('/ghe/sua/{id}', [App\Http\Controllers\GheController::class, 'postSua'])->name('ghe.sua');
Route::get('/ghe/xoa/{id}', [App\Http\Controllers\GheController::class, 'getXoa'])->name('ghe.xoa');

Route::get('/hethongrap', [App\Http\Controllers\HeThongRapController::class, 'getDanhSach'])->name('hethongrap');
Route::get('/hethongrap/them', [App\Http\Controllers\HeThongRapController::class, 'getThem'])->name('hethongrap.them');
Route::post('/hethongrap/them', [App\Http\Controllers\HeThongRapController::class, 'postThem'])->name('hethongrap.them');
Route::get('/hethongrap/sua/{id}', [App\Http\Controllers\HeThongRapController::class, 'getSua'])->name('hethongrap.sua');
Route::post('/hethongrap/sua/{id}', [App\Http\Controllers\HeThongRapController::class, 'postSua'])->name('hethongrap.sua');
Route::get('/hethongrap/xoa/{id}', [App\Http\Controllers\HeThongRapController::class, 'getXoa'])->name('hethongrap.xoa');

Route::get('/khuyenmai', [App\Http\Controllers\KhuyenMaiController::class, 'getDanhSach'])->name('khuyenmai');
Route::get('/khuyenmai/them', [App\Http\Controllers\KhuyenMaiController::class, 'getThem'])->name('khuyenmai.them');
Route::post('/khuyenmai/them', [App\Http\Controllers\KhuyenMaiController::class, 'postThem'])->name('khuyenmai.them');
Route::get('/khuyenmai/sua/{id}', [App\Http\Controllers\KhuyenMaiController::class, 'getSua'])->name('khuyenmai.sua');
Route::post('/khuyenmai/sua/{id}', [App\Http\Controllers\KhuyenMaiController::class, 'postSua'])->name('khuyenmai.sua');
Route::get('/khuyenmai/xoa/{id}', [App\Http\Controllers\KhuyenMaiController::class, 'getXoa'])->name('khuyenmai.xoa');

Route::get('/loaiphim', [App\Http\Controllers\LoaiPhimController::class, 'getDanhSach'])->name('loaiphim');
Route::get('/loaiphim/them', [App\Http\Controllers\LoaiPhimController::class, 'getThem'])->name('loaiphim.them');
Route::post('/loaiphim/them', [App\Http\Controllers\LoaiPhimController::class, 'postThem'])->name('loaiphim.them');
Route::get('/loaiphim/sua/{id}', [App\Http\Controllers\LoaiPhimController::class, 'getSua'])->name('loaiphim.sua');
Route::post('/loaiphim/sua/{id}', [App\Http\Controllers\LoaiPhimController::class, 'postSua'])->name('loaiphim.sua');
Route::get('/loaiphim/xoa/{id}', [App\Http\Controllers\LoaiPhimController::class, 'getXoa'])->name('loaiphim.xoa');

Route::get('/loaiphimphim', [App\Http\Controllers\LoaiPhimPhimController::class, 'getDanhSach'])->name('loaiphimphim');
Route::get('/loaiphimphim/them', [App\Http\Controllers\LoaiPhimPhimController::class, 'getThem'])->name('loaiphimphim.them');
Route::post('/loaiphimphim/them', [App\Http\Controllers\LoaiPhimPhimController::class, 'postThem'])->name('loaiphimphim.them');
Route::get('/loaiphimphim/sua/{id}', [App\Http\Controllers\LoaiPhimPhimController::class, 'getSua'])->name('loaiphimphim.sua');
Route::post('/loaiphimphim/sua/{id}', [App\Http\Controllers\LoaiPhimPhimController::class, 'postSua'])->name('loaiphimphim.sua');
Route::get('/loaiphimphim/xoa/{id}', [App\Http\Controllers\LoaiPhimPhimController::class, 'getXoa'])->name('loaiphimphim.xoa');

Route::get('/phanhoi', [App\Http\Controllers\PhanHoiController::class, 'getDanhSach'])->name('phanhoi');
Route::get('/phanhoi/them', [App\Http\Controllers\PhanHoiController::class, 'getThem'])->name('phanhoi.them');
Route::post('/phanhoi/them', [App\Http\Controllers\PhanHoiController::class, 'postThem'])->name('phanhoi.them');
Route::get('/phanhoi/sua/{id}', [App\Http\Controllers\PhanHoiController::class, 'getSua'])->name('phanhoi.sua');
Route::post('/phanhoi/sua/{id}', [App\Http\Controllers\PhanHoiController::class, 'postSua'])->name('phanhoi.sua');
Route::get('/phanhoi/xoa/{id}', [App\Http\Controllers\PhanHoiController::class, 'getXoa'])->name('phanhoi.xoa');

Route::get('/phim', [App\Http\Controllers\PhimController::class, 'getDanhSach'])->name('phim');
Route::get('/phim/them', [App\Http\Controllers\PhimController::class, 'getThem'])->name('phim.them');
Route::post('/phim/them', [App\Http\Controllers\PhimController::class, 'postThem'])->name('phim.them');
Route::get('/phim/sua/{id}', [App\Http\Controllers\PhimController::class, 'getSua'])->name('phim.sua');
Route::post('/phim/sua/{id}', [App\Http\Controllers\PhimController::class, 'postSua'])->name('phim.sua');
Route::get('/phim/xoa/{id}', [App\Http\Controllers\PhimController::class, 'getXoa'])->name('phim.xoa');

Route::get('/phong', [App\Http\Controllers\PhongController::class, 'getDanhSach'])->name('phong');
Route::get('/phong/them', [App\Http\Controllers\PhongController::class, 'getThem'])->name('phong.them');
Route::post('/phong/them', [App\Http\Controllers\PhongController::class, 'postThem'])->name('phong.them');
Route::get('/phong/sua/{id}', [App\Http\Controllers\PhongController::class, 'getSua'])->name('phong.sua');
Route::post('/phong/sua/{id}', [App\Http\Controllers\PhongController::class, 'postSua'])->name('phong.sua');
Route::get('/phong/xoa/{id}', [App\Http\Controllers\PhongController::class, 'getXoa'])->name('phong.xoa');

Route::get('/quanhuyen', [App\Http\Controllers\QuanHuyenController::class, 'getDanhSach'])->name('quanhuyen');
Route::get('/quanhuyen/them', [App\Http\Controllers\QuanHuyenController::class, 'getThem'])->name('quanhuyen.them');
Route::post('/quanhuyen/them', [App\Http\Controllers\QuanHuyenController::class, 'postThem'])->name('quanhuyen.them');
Route::get('/quanhuyen/sua/{id}', [App\Http\Controllers\QuanHuyenController::class, 'getSua'])->name('quanhuyen.sua');
Route::post('/quanhuyen/sua/{id}', [App\Http\Controllers\QuanHuyenController::class, 'postSua'])->name('quanhuyen.sua');
Route::get('/quanhuyen/xoa/{id}', [App\Http\Controllers\QuanHuyenController::class, 'getXoa'])->name('quanhuyen.xoa');

Route::get('/rap', [App\Http\Controllers\RapController::class, 'getDanhSach'])->name('rap');
Route::get('/rap/them', [App\Http\Controllers\RapController::class, 'getThem'])->name('rap.them');
Route::post('/rap/them', [App\Http\Controllers\RapController::class, 'postThem'])->name('rap.them');
Route::get('/rap/sua/{id}', [App\Http\Controllers\RapController::class, 'getSua'])->name('rap.sua');
Route::post('/rap/sua/{id}', [App\Http\Controllers\RapController::class, 'postSua'])->name('rap.sua');
Route::get('/rap/xoa/{id}', [App\Http\Controllers\RapController::class, 'getXoa'])->name('rap.xoa');

Route::get('/suatchieu', [App\Http\Controllers\SuatChieuController::class, 'getDanhSach'])->name('suatchieu');
Route::get('/suatchieu/them', [App\Http\Controllers\SuatChieuController::class, 'getThem'])->name('suatchieu.them');
Route::post('/suatchieu/them', [App\Http\Controllers\SuatChieuController::class, 'postThem'])->name('suatchieu.them');
Route::get('/suatchieu/sua/{id}', [App\Http\Controllers\SuatChieuController::class, 'getSua'])->name('suatchieu.sua');
Route::post('/suatchieu/sua/{id}', [App\Http\Controllers\SuatChieuController::class, 'postSua'])->name('suatchieu.sua');
Route::get('/suatchieu/xoa/{id}', [App\Http\Controllers\SuatChieuController::class, 'getXoa'])->name('suatchieu.xoa');

Route::get('/thanhpho', [App\Http\Controllers\ThanhPhoController::class, 'getDanhSach'])->name('thanhpho');
Route::get('/thanhpho/them', [App\Http\Controllers\ThanhPhoController::class, 'getThem'])->name('thanhpho.them');
Route::post('/thanhpho/them', [App\Http\Controllers\ThanhPhoController::class, 'postThem'])->name('thanhpho.them');
Route::get('/thanhpho/sua/{id}', [App\Http\Controllers\ThanhPhoController::class, 'getSua'])->name('thanhpho.sua');
Route::post('/thanhpho/sua/{id}', [App\Http\Controllers\ThanhPhoController::class, 'postSua'])->name('thanhpho.sua');
Route::get('/thanhpho/xoa/{id}', [App\Http\Controllers\ThanhPhoController::class, 'getXoa'])->name('thanhpho.xoa');

Route::get('/ve', [App\Http\Controllers\VeController::class, 'getDanhSach'])->name('ve');
Route::get('/ve/them', [App\Http\Controllers\VeController::class, 'getThem'])->name('ve.them');
Route::post('/ve/them', [App\Http\Controllers\VeController::class, 'postThem'])->name('ve.them');
Route::get('/ve/sua/{id}', [App\Http\Controllers\VeController::class, 'getSua'])->name('ve.sua');
Route::post('/ve/sua/{id}', [App\Http\Controllers\VeController::class, 'postSua'])->name('ve.sua');
Route::get('/ve/xoa/{id}', [App\Http\Controllers\VeController::class, 'getXoa'])->name('ve.xoa');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
