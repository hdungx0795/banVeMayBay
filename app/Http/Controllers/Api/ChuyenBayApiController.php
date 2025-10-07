<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChuyenBayApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(\App\Models\ChuyenBay::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Bước 1: Kiểm tra dữ liệu đầu vào
        $validated = $request->validate([
            'ma_chuyen_bay' => 'required|unique:chuyen_bays',
            'diem_di' => 'required',
            'diem_den' => 'required',
            'gio_khoi_hanh' => 'required|date',
            'gio_den' => 'required|date|after:gio_khoi_hanh',
            'gia_ve' => 'required|numeric',
        ]);

        // ✅ Bước 2: Lưu vào cơ sở dữ liệu
        $chuyenBay = ChuyenBay::create($validated);

        // ✅ Bước 3: Trả kết quả JSON về client
        return response()->json([
            'message' => 'Thêm chuyến bay thành công!',
            'data' => $chuyenBay
        ], 201); // HTTP 201 = Created
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
