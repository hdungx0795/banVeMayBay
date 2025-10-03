<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChuyenBay;
class ChuyenBayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chuyenBays = ChuyenBay::paginate(10);
        return view('chuyenbay.index', compact('chuyenBays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('chuyenbay.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ma_chuyen_bay' => 'required|unique:chuyen_bays',
            'diem_di' => 'required',
            'diem_den' => 'required',
            'gio_khoi_hanh' => 'required|date',
            'gio_den' => 'required|date|after:gio_khoi_hanh',
            'gia_ve' => 'required|numeric',
        ]);

        ChuyenBay::create($request->all());

        return redirect()->route('chuyenbay.index')
                         ->with('success', 'Thêm chuyến bay thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chuyenbay $chuyenbay)
    {
        return view('chuyenbay.show', compact('chuyenbay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chuyenbay $chuyenbay)
    {
        return view('chuyenbay.edit', compact('chuyenbay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chuyenbay $chuyenbay)
    {
        $request->validate([
            'diem_di' => 'required',
            'diem_den' => 'required',
            'gio_khoi_hanh' => 'required|date',
            'gio_den' => 'required|date|after:gio_khoi_hanh',
            'gia_ve' => 'required|numeric',
        ]);

        $chuyenbay->update($request->all());

        return redirect()->route('chuyenbay.index')
                         ->with('success', 'Cập nhật chuyến bay thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chuyenbay $chuyenbay)
    {
        $chuyenbay->delete();
        return redirect()->route('chuyenbay.index')
                         ->with('success', 'Xóa chuyến bay thành công');
    }
}