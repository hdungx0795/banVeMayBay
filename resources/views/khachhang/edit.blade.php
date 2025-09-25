@extends('layouts.app')

@section('title','Sửa khách hàng')

@section('content')
    <h1>Sửa khách hàng</h1>

    {{-- Hiển thị lỗi validate --}}
    @if ($errors->any())
        <div style="color:red; margin-bottom:10px">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('khachhang.update', $khachhang->id) }}" method="POST" style="max-width:400px">
        @csrf
        @method('PUT')

        <div style="margin-bottom:10px">
            <label for="ten">Tên</label><br>
            <input type="text" id="ten" name="ten" 
                   value="{{ old('ten', $khachhang->ten) }}" required>
        </div>

        <div style="margin-bottom:10px">
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" 
                   value="{{ old('email', $khachhang->email) }}" required>
        </div>

        <div style="margin-bottom:10px">
            <label for="so_dien_thoai">Số điện thoại</label><br>
            <input type="text" id="so_dien_thoai" name="so_dien_thoai" 
                   value="{{ old('so_dien_thoai', $khachhang->so_dien_thoai) }}">
        </div>

        <div>
            <button type="submit" style="padding:5px 15px">Cập nhật</button>
            <a href="/khachhang">Quay lại</a>
        </div>
    </form>
@endsection

