<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // Hiển thị list
    public function index()
    {
        $khachHangs = KhachHang::orderBy('id','desc')->paginate(10);
        return view('khachhang.index', compact('khachHangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    // From tạo mới
    public function create()
    {
        return view('khachhang.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    // Lưu mới
    public function store(Request $request)
    {
        $data = $request->validate([
            'ten' => 'required|string|max:255',
            'email' => 'required|email|unique:khach_hangs,email',
            'so_dien_thoai' => 'nullable|string|max:20',
        ]);

        KhachHang::create($data);
        return redirect()->route('khachhang.index')->with('success','Thêm khách hàng thành công');
    }

    /**
     * Display the specified resource.
     */

    // Hiện thị chi tiết 
    public function show(KhachHang $khachhang)
    {
        return view('khachhang.show',compact('khachhang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Form sửa
    public function edit(KhachHang $khachhang)
    {
        return view('khachhang.edit', compact('khachhang'));
    }

    /**
     * Update the specified resource in storage.
     */

    // Cập nhật
    public function update(Request $request, KhachHang $khachhang)
    {
        $data = $request->validate([
            'ten' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('khach_hangs', 'email')->ignore($khachhang->id),
            ],
            'so_dien_thoai' => 'nullable|string|max:20',
        ]);

        $khachhang->update($data);

        return redirect()->route('khachhang.index')->with('success', 'Cập nhật khách hàng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */

    // Xóa
    public function destroy(KhachHang $khachhang)
    {
        $khachhang->delete();
        return redirect()->route('khachhang.index')->with('success','Xóa khách hàng thành công');
    }
}
