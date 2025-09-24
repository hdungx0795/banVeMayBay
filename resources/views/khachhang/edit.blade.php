@extends('layouts.app')

@section('title','Sửa khách hàng')

@section('content')
    <h1>Sửa khách hàng</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('khachhang.update', $khachhang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Tên</label><br>
            <input type="text" name="ten" value="{{ old('ten', $khachhang->ten) }}">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email', $khachhang->email) }}">
        </div>
        <div>
            <label>Số điện thoại</label><br>
            <input type="text" name="so_dien_thoai" value="{{ old('so_dien_thoai', $khachhang->so_dien_thoai) }}">
        </div>
        <br>
        <button type="submit">Cập nhật</button>
    </form>
@endsection
