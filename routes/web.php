<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Khai báo route khách hàng
use App\Http\Controllers\KhachHangController;

Route::resource('khachhang', KhachHangController::class);

// Khai báo route chuyến bay
use App\Http\Controllers\ChuyenBayController;

Route::resource('chuyenbay', ChuyenBayController::class);
