@extends('layouts.app')

@section('title','Thêm khách hàng')

@section('content')
    <h1>Thêm khách hàng</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('khachhang.store') }}" method="POST">
        @csrf
        <div>
            <label>Tên</label><br>
            <input type="text" name="ten" value="{{ old('ten') }}">
        </div>
        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label>Số điện thoại</label><br>
            <input type="text" name="so_dien_thoai" value="{{ old('so_dien_thoai') }}">
        </div>
        <br>
        <button type="submit">Lưu</button>
    </form>
@endsection
