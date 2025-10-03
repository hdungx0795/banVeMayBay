@extends('layouts.app')

@section('title','Chi tiết chuyến bay')

@section('content')
<h1>Chi tiết chuyến bay</h1>

<p><strong>ID:</strong> {{ $chuyenbay->id }}</p>
<p><strong>Mã chuyến bay:</strong> {{ $chuyenbay->ma_chuyen_bay }}</p>
<p><strong>Điểm đi:</strong> {{ $chuyenbay->diem_di }}</p>
<p><strong>Điểm đến:</strong> {{ $chuyenbay->diem_den }}</p>
<p><strong>Giờ khởi hành:</strong> {{ $chuyenbay->gio_khoi_hanh }}</p>
<p><strong>Giờ đến:</strong> {{ $chuyenbay->gio_den }}</p>
<p><strong>Giá vé:</strong> {{ number_format($chuyenbay->gia_ve) }} VND</p>

<a href="{{ route('chuyenbay.edit', $chuyenbay->id) }}">Sửa</a>
<a href="{{ route('chuyenbay.index') }}">Quay lại danh sách</a>
@endsection