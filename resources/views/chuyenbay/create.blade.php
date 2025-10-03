@extends('layouts.app')

@section('title','Thêm chuyến bay')

@section('content')
<h1>Thêm chuyến bay</h1>

@if ($errors->any())
<ul style="color:red">
    @foreach ($errors->all() as $err)
    <li>{{ $err }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('chuyenbay.store') }}" method="POST">
    @csrf
    <div>
        <label>Mã chuyến bay</label><br>
        <input type="text" name="ma_chuyen_bay" value="{{ old('ma_chuyen_bay') }}">
    </div>
    <div>
        <label>Điểm đi</label><br>
        <input type="text" name="diem_di" value="{{ old('diem_di') }}">
    </div>
    <div>
        <label>Điểm đến</label><br>
        <input type="text" name="diem_den" value="{{ old('diem_den') }}">
    </div>
    <div>
        <label>Giờ khởi hành</label><br>
        <input type="datetime-local" name="gio_khoi_hanh" value="{{ old('gio_khoi_hanh') }}">
    </div>
    <div>
        <label>Giờ đến</label><br>
        <input type="datetime-local" name="gio_den" value="{{ old('gio_den') }}">
    </div>
    <div>
        <label>Giá vé</label><br>
        <input type="number" name="gia_ve" value="{{ old('gia_ve') }}">
    </div>
    <br>
    <button type="submit">Lưu</button>
</form>
@endsection