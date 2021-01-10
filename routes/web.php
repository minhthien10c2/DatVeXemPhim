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

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin');

Route::group(['prefix'=>'/'], function(){
    Route::get('/', [App\Http\Controllers\ClientController::class, 'homeIndex'])->name('homeindex');
    Route::get('/userinfo', [App\Http\Controllers\ClientController::class, 'getUserInfo'])->name('thongtinnguoidung');
    Route::get('/listphanhoi', [App\Http\Controllers\ClientController::class, 'getListPhanHoi'])->name('listphanhoi');
    Route::get('/listkhuyenmai', [App\Http\Controllers\ClientController::class, 'getListKhuyenMai'])->name('listkhuyenmai');
    Route::get('/khuyenmai/{id}', [App\Http\Controllers\ClientController::class, 'getKhuyenMai'])->name('khuyenmai');
    Route::get('/phanhoi', [App\Http\Controllers\ClientController::class, 'getPhanHoi'])->name('phanhoi');
    Route::get('/chitietphim/{id}', [App\Http\Controllers\ClientController::class, 'getChiTietPhim'])->name('chitietphim');
    Route::get('/datve/{id}', [App\Http\Controllers\ClientController::class, 'getDatVe'])->name('datve');
    Route::get('/themphanhoi', [App\Http\Controllers\PhanHoiController::class, 'getThem'])->name('phanhoi.them');
    Route::post('/themphanhoi', [App\Http\Controllers\PhanHoiController::class, 'postThem'])->name('phanhoi.them');
});

Route::get('/dangnhap', [App\Http\Controllers\NguoiDungController::class, 'getDangNhap'])->name('dangnhap');
Route::post('/dangnhap', [App\Http\Controllers\NguoiDungController::class, 'postDangNhap'])->name('dangnhap');
Route::get('/dangxuat', [App\Http\Controllers\NguoiDungController::class, 'postDangXuat'])->name('dangxuat');
Route::get('/dangky', [App\Http\Controllers\NguoiDungController::class, 'getDangKy'])->name('dangky');
Route::post('/dangky', [App\Http\Controllers\NguoiDungController::class, 'postDangKy'])->name('dangky');

Route::get('/ajaxgetrap', [App\Http\Controllers\RapController::class, 'getAjaxGetRap']);
Route::get('/ajaxgetrapbyhtrsc', [App\Http\Controllers\RapController::class, 'getAjaxGetRapByHTRAndSC']);
Route::get('/ajaxgetncbyrandphim', [App\Http\Controllers\SuatChieuController::class, 'getAjaxNCByRAndSC']);
Route::get('/ajaxgetgcbyrandphim', [App\Http\Controllers\SuatChieuController::class, 'getAjaxGioChieuByRAndSC']);
Route::get('/ajaxgetsuatchieu', [App\Http\Controllers\SuatChieuController::class, 'getAjaxSuatChieu']);
Route::get('/ajaxgetphong', [App\Http\Controllers\PhongController::class, 'getAjaxGetPhong']);
Route::get('/ajaxgetghe', [App\Http\Controllers\GheController::class, 'getAjaxGetGhe']);
Route::get('/ajaxgetquanhuyen', [App\Http\Controllers\QuanHuyenController::class, 'getAjaxGetQuanHuyen']);

Route::group(['prefix'=>'admin','middleware'=>['checkuser','loginadmin']], function(){
    Route::get('/dangnhap', [App\Http\Controllers\NguoiDungController::class, 'getDangNhapAdmin'])->name('dangnhapadmin');
    Route::post('/dangnhap', [App\Http\Controllers\NguoiDungController::class, 'postDangNhapAdmin'])->name('dangnhapadmin');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin');

    Route::group(['prefix'=>'nguoidung','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\NguoiDungController::class, 'getDanhSach'])->name('nguoidung.danhsach');       
        Route::get('/sua/{id}', [App\Http\Controllers\NguoiDungController::class, 'getSua'])->name('nguoidung.sua');       
        Route::post('/sua/{id}', [App\Http\Controllers\NguoiDungController::class, 'postSua'])->name('nguoidung.sua');       
        Route::get('/xoa/{id}', [App\Http\Controllers\NguoiDungController::class, 'getXoa'])->name('nguoidung.xoa');       
    });

    Route::group(['prefix'=>'dinhdang','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\DinhDangController::class, 'getDanhSach'])->name('dinhdang.danhsach');
        Route::get('/them', [App\Http\Controllers\DinhDangController::class, 'getThem'])->name('dinhdang.them');
        Route::post('/them', [App\Http\Controllers\DinhDangController::class, 'postThem'])->name('dinhdang.them');
        Route::get('/sua/{id}', [App\Http\Controllers\DinhDangController::class, 'getSua'])->name('dinhdang.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\DinhDangController::class, 'postSua'])->name('dinhdang.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\DinhDangController::class, 'getXoa'])->name('dinhdang.xoa');
    });

    Route::group(['prefix'=>'dinhdangphim','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\DinhDangPhimController::class, 'getDanhSach'])->name('dinhdangphim.danhsach');
        Route::get('/them', [App\Http\Controllers\DinhDangPhimController::class, 'getThem'])->name('dinhdangphim.them');
        Route::post('/them', [App\Http\Controllers\DinhDangPhimController::class, 'postThem'])->name('dinhdangphim.them');
        Route::get('/sua/{id}', [App\Http\Controllers\DinhDangPhimController::class, 'getSua'])->name('dinhdangphim.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\DinhDangPhimController::class, 'postSua'])->name('dinhdangphim.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\DinhDangPhimController::class, 'getXoa'])->name('dinhdangphim.xoa');
    });


    Route::group(['prefix'=>'ghe','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\GheController::class, 'getDanhSach'])->name('ghe.danhsach');
        Route::get('/them', [App\Http\Controllers\GheController::class, 'getThem'])->name('ghe.them');
        Route::post('/them', [App\Http\Controllers\GheController::class, 'postThem'])->name('ghe.them');
        Route::get('/sua/{id}', [App\Http\Controllers\GheController::class, 'getSua'])->name('ghe.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\GheController::class, 'postSua'])->name('ghe.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\GheController::class, 'getXoa'])->name('ghe.xoa');
    });

    Route::group(['prefix'=>'hethongrap','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\HeThongRapController::class, 'getDanhSach'])->name('hethongrap.danhsach');
        Route::get('/them', [App\Http\Controllers\HeThongRapController::class, 'getThem'])->name('hethongrap.them');
        Route::post('/them', [App\Http\Controllers\HeThongRapController::class, 'postThem'])->name('hethongrap.them');
        Route::get('/sua/{id}', [App\Http\Controllers\HeThongRapController::class, 'getSua'])->name('hethongrap.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\HeThongRapController::class, 'postSua'])->name('hethongrap.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\HeThongRapController::class, 'getXoa'])->name('hethongrap.xoa');
    });


    Route::group(['prefix'=>'khuyenmai','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\KhuyenMaiController::class, 'getDanhSach'])->name('khuyenmai.danhsach');
        Route::get('/them', [App\Http\Controllers\KhuyenMaiController::class, 'getThem'])->name('khuyenmai.them');
        Route::post('/them', [App\Http\Controllers\KhuyenMaiController::class, 'postThem'])->name('khuyenmai.them');
        Route::get('/sua/{id}', [App\Http\Controllers\KhuyenMaiController::class, 'getSua'])->name('khuyenmai.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\KhuyenMaiController::class, 'postSua'])->name('khuyenmai.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\KhuyenMaiController::class, 'getXoa'])->name('khuyenmai.xoa');
    });

    Route::group(['prefix'=>'loaiphim','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\LoaiPhimController::class, 'getDanhSach'])->name('loaiphim.danhsach');
        Route::get('/them', [App\Http\Controllers\LoaiPhimController::class, 'getThem'])->name('loaiphim.them');
        Route::post('/them', [App\Http\Controllers\LoaiPhimController::class, 'postThem'])->name('loaiphim.them');
        Route::get('/sua/{id}', [App\Http\Controllers\LoaiPhimController::class, 'getSua'])->name('loaiphim.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\LoaiPhimController::class, 'postSua'])->name('loaiphim.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\LoaiPhimController::class, 'getXoa'])->name('loaiphim.xoa');
    });

    Route::group(['prefix'=>'loaiphimphim','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\LoaiPhimPhimController::class, 'getDanhSach'])->name('loaiphimphim.danhsach');
        Route::get('/them', [App\Http\Controllers\LoaiPhimPhimController::class, 'getThem'])->name('loaiphimphim.them');
        Route::post('/them', [App\Http\Controllers\LoaiPhimPhimController::class, 'postThem'])->name('loaiphimphim.them');
        Route::get('/sua/{id}', [App\Http\Controllers\LoaiPhimPhimController::class, 'getSua'])->name('loaiphimphim.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\LoaiPhimPhimController::class, 'postSua'])->name('loaiphimphim.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\LoaiPhimPhimController::class, 'getXoa'])->name('loaiphimphim.xoa');
    });

    Route::group(['prefix'=>'phanhoi','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\PhanHoiController::class, 'getDanhSach'])->name('phanhoi.danhsach');
        Route::get('/sua/{id}', [App\Http\Controllers\PhanHoiController::class, 'getSua'])->name('phanhoi.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\PhanHoiController::class, 'postSua'])->name('phanhoi.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\PhanHoiController::class, 'getXoa'])->name('phanhoi.xoa');
    });

    Route::group(['prefix'=>'phim','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\PhimController::class, 'getDanhSach'])->name('phim.danhsach');
        Route::get('/them', [App\Http\Controllers\PhimController::class, 'getThem'])->name('phim.them');
        Route::post('/them', [App\Http\Controllers\PhimController::class, 'postThem'])->name('phim.them');
        Route::get('/sua/{id}', [App\Http\Controllers\PhimController::class, 'getSua'])->name('phim.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\PhimController::class, 'postSua'])->name('phim.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\PhimController::class, 'getXoa'])->name('phim.xoa');
    });

    Route::group(['prefix'=>'phong','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\PhongController::class, 'getDanhSach'])->name('phong.danhsach');
        Route::get('/them', [App\Http\Controllers\PhongController::class, 'getThem'])->name('phong.them');
        Route::post('/them', [App\Http\Controllers\PhongController::class, 'postThem'])->name('phong.them');
        Route::get('/sua/{id}', [App\Http\Controllers\PhongController::class, 'getSua'])->name('phong.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\PhongController::class, 'postSua'])->name('phong.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\PhongController::class, 'getXoa'])->name('phong.xoa');
    });

    Route::group(['prefix'=>'quanhuyen','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\QuanHuyenController::class, 'getDanhSach'])->name('quanhuyen.danhsach');
        Route::get('/them', [App\Http\Controllers\QuanHuyenController::class, 'getThem'])->name('quanhuyen.them');
        Route::post('/them', [App\Http\Controllers\QuanHuyenController::class, 'postThem'])->name('quanhuyen.them');
        Route::get('/sua/{id}', [App\Http\Controllers\QuanHuyenController::class, 'getSua'])->name('quanhuyen.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\QuanHuyenController::class, 'postSua'])->name('quanhuyen.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\QuanHuyenController::class, 'getXoa'])->name('quanhuyen.xoa');
    });

    Route::group(['prefix'=>'rap','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\RapController::class, 'getDanhSach'])->name('rap.danhsach');
        Route::get('/them', [App\Http\Controllers\RapController::class, 'getThem'])->name('rap.them');
        Route::post('/them', [App\Http\Controllers\RapController::class, 'postThem'])->name('rap.them');
        Route::get('/sua/{id}', [App\Http\Controllers\RapController::class, 'getSua'])->name('rap.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\RapController::class, 'postSua'])->name('rap.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\RapController::class, 'getXoa'])->name('rap.xoa');
    });

    Route::group(['prefix'=>'suatchieu','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\SuatChieuController::class, 'getDanhSach'])->name('suatchieu.danhsach');
        Route::get('/them', [App\Http\Controllers\SuatChieuController::class, 'getThem'])->name('suatchieu.them');
        Route::post('/them', [App\Http\Controllers\SuatChieuController::class, 'postThem'])->name('suatchieu.them');
        Route::get('/sua/{id}', [App\Http\Controllers\SuatChieuController::class, 'getSua'])->name('suatchieu.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\SuatChieuController::class, 'postSua'])->name('suatchieu.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\SuatChieuController::class, 'getXoa'])->name('suatchieu.xoa');
    });

    Route::group(['prefix'=>'thanhpho','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\ThanhPhoController::class, 'getDanhSach'])->name('thanhpho.danhsach');
        Route::get('/them', [App\Http\Controllers\ThanhPhoController::class, 'getThem'])->name('thanhpho.them');
        Route::post('/them', [App\Http\Controllers\ThanhPhoController::class, 'postThem'])->name('thanhpho.them');
        Route::get('/sua/{id}', [App\Http\Controllers\ThanhPhoController::class, 'getSua'])->name('thanhpho.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\ThanhPhoController::class, 'postSua'])->name('thanhpho.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\ThanhPhoController::class, 'getXoa'])->name('thanhpho.xoa');
    });

    Route::group(['prefix'=>'ve','middleware'=>['checkuser','loginadmin']], function(){
        Route::get('/danhsach', [App\Http\Controllers\VeController::class, 'getDanhSach'])->name('ve.danhsach');
        Route::get('/them', [App\Http\Controllers\VeController::class, 'getThem'])->name('ve.them');
        Route::post('/them', [App\Http\Controllers\VeController::class, 'postThem'])->name('ve.them');
        Route::get('/sua/{id}', [App\Http\Controllers\VeController::class, 'getSua'])->name('ve.sua');
        Route::post('/sua/{id}', [App\Http\Controllers\VeController::class, 'postSua'])->name('ve.sua');
        Route::get('/xoa/{id}', [App\Http\Controllers\VeController::class, 'getXoa'])->name('ve.xoa');
    });
});