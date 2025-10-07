<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChuyenBayApiController;

// ✅ Kiểm tra API hoạt động
Route::get('/test', function () {
    return response()->json(['message' => 'API đang hoạt động!']);
});

// Route cho đối tượng ChuyenBay
Route::apiResource('chuyenbays', ChuyenBayApiController::class);
