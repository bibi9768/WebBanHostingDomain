<?php

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

Route::get('/', 'UserController@getHomePage')->name('getHomePage');

Route::group(['middleware' => 'checkauth'], function () {
    Route::get('/dang-nhap', 'UserController@getSignInPage')->name('getSignInPage');
    Route::post('/dang-nhap', 'UserController@postSignInPage')->name('getSignInPage');
    Route::get('/dang-ky', 'UserController@getSignUpPage')->name('getSignUpPage');
    Route::post('/dang-ky', 'UserController@postSignUpPage')->name('getSignUpPage');
    Route::get('/dang-ky-ten-mien-va-thanh-toan/name={name}&domain={domain}', 'UserController@thanhToanTenMien')->name('thanhToanTenMien');
});

Route::group(['middleware' => 'checkloggedin'], function () {
    Route::get('/dang-xuat', 'UserController@getSignOut')->name('signOut');
    Route::get('/ket-thuc-thanh-toan/name={name}&domain={domain}', 'UserController@ketThucThanhToan')->name('ketThucThanhToan');
    Route::post('/ket-thuc-thanh-toan', 'UserController@postKetThucThanhToan')->name('postKetThucThanhToan');
    Route::get('/don-hang-cua-toi', 'UserController@getDonHangCuaToi')->name('getDonHangCuaToi');
    Route::prefix('/thanh-toan')->group(function () {
        Route::get('/domain/name={name}&domain={domain}', 'UserController@thanhToanTenMien')->name('getThanhToanDomain');
        Route::get('/hosting/loaihosting={loai}&sothang={sothang}', 'UserController@thanhToanHosting')->name('getThanhToanHosting');
    });
});


Route::get('/kiem-tra', 'UserController@getCheckPage')->name('getCheckPage');
Route::get('/bang-gia-ten-mien', 'UserController@getBangGiaTenMien')->name('getBangGiaTenMien');
Route::get('/kiem-tra-ten-mien/name={name}&domain={domain}', 'UserController@kiemTraTenMien')->name('kiemTraTenMien');

Route::prefix('/web-hosting')->group(function () {
    Route::get('/', function () {
        return redirect()->route('getHomePage');
    });
    Route::get('/wordpress-hosting', 'UserController@getWordpressHosting')->name('getWordpressHosting');
    Route::get('/hosting-linux', 'UserController@getHostingLinux')->name('getHostingLinux');
    Route::get('/hosting-windows', 'UserController@getHostingWindows')->name('getHostingWindows');

});


Route::prefix('quan-ly')->group(function () {
    Route::get('/', 'AdminController@getTrangChu')->name('getTrangChu');
    Route::get('/quan-ly-hoa-don-ten-mien', 'AdminController@getQuanLyHDTenMien')->name('getQuanLyHDTenMien');
    Route::get('/quan-ly-hoa-don-hosting', 'AdminController@getQuanLyHDHosting')->name('getQuanLyHDHosting');

    Route::prefix('quan-ly-ten-mien')->group(function () {
        Route::get('/', 'AdminController@getQuanLyTenMien')->name('getQuanLyTenMien');
        Route::get('/sua-ten-mien/{id}', 'AdminController@getSuaTenMien')->name('getSuaTenMien');
        Route::post('/sua-ten-mien/{id}', 'AdminController@postSuaTenMien')->name('postSuaTenMien');
        Route::get('/them-ten-mien', 'AdminController@getThemTenMien')->name('getThemTenMien');
        Route::post('/them-ten-mien', 'AdminController@postThemTenMien')->name('postThemTenMien');
        Route::get('/xoa-ten-mien/{id}', 'AdminController@getXoaTenMien')->name('getXoaTenMien');
    });

    Route::prefix('quan-ly-hosting')->group(function () {
        Route::get('/', 'AdminController@getQuanLyHosting')->name('getQuanLyHosting');
        Route::get('/sua-hosting/{id}', 'AdminController@getSuaHosting')->name('getSuaHosting');
        Route::post('/sua-hosting/{id}', 'AdminController@postSuaHosting')->name('postSuaHosting');
        Route::get('/them-hosting', 'AdminController@getThemHosting')->name('getThemHosting');
        Route::post('/them-hosting', 'AdminController@postThemHosting')->name('postThemHosting');
        Route::get('/xoa-hosting/{id}', 'AdminController@getXoaHosting')->name('getXoaHosting');
    });

    Route::prefix('quan-ly-nguoi-dung')->group(function () {
        Route::get('/', 'AdminController@getQuanLyNguoiDung')->name('getQuanLyNguoiDung');
    });


});


Route::get('/admin1', 'AdminController@index');

Route::post('/testpay', 'PaypalController@index')->name('postThanhToanPayPal');
