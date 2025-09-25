@extends('layouts.app')

@section('title','Chi tiết khách hàng')

@section('content')
    <h1>Chi tiết khách hàng</h1>

    <p><strong>ID:</strong> {{ $khachhang->id }}</p>
    <p><strong>Tên:</strong> {{ $khachhang->ten }}</p>
    <p><strong>Email:</strong> {{ $khachhang->email }}</p>
    <p><strong>SĐT:</strong> {{ $khachhang->so_dien_thoai }}</p>

    <a href="{{ route('khachhang.edit', $khachhang->id) }}">Sửa</a>
    <a href="/khachhang">Quay lại</a>
@endsection
