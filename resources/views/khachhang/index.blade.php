@extends('layouts.app')

@section('title','Danh sách khách hàng')

@section('content')
    <h1>Danh sách khách hàng</h1>

    {{-- Nút thêm khách hàng --}}
    
    <a href="/khachhang/create">+ Thêm khách hàng</a>

    <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse:collapse">
        <thead style="background:#f2f2f2">
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($khachHangs as $kh)
                <tr>
                    <td>{{ $kh->id }}</td>
                    <td>
                        <a href="/khachhang/{{ $kh->id }}">
                            {{ $kh->ten }}
                        </a> 
                    </td>
                    <td>{{ $kh->email }}</td>
                    <td>{{ $kh->so_dien_thoai }}</td>
                    <td>
                        {{-- Nút sửa --}}
                        <a href="/khachhang/{{ $kh->id }}/edit"
                           style="margin-right:5px; color:blue">Sửa</a>

                        {{-- Form xóa --}}
                        <form action="{{ route('khachhang.destroy', $kh->id) }}" 
                              method="POST" 
                              style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    onclick="return confirm('Bạn chắc chắn muốn xóa?')" 
                                    style="color:red; background:none; border:none; cursor:pointer">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align:center">Không có khách hàng</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Phân trang --}}
    <div style="margin-top:15px">
        {{ $khachHangs->links() }}
    </div>
@endsection
