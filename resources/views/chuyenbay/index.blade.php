@extends('layouts.app')

@section('title','Danh sách chuyến bay')

@section('content')
<h1>Danh sách chuyến bay</h1>
<a href="{{ route('chuyenbay.create') }}">+ Thêm chuyến bay</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Mã</th>
        <th>Điểm đi</th>
        <th>Điểm đến</th>
        <th>Giờ khởi hành</th>
        <th>Giờ đến</th>
        <th>Giá vé</th>
        <th>Hành động</th>
    </tr>
    @foreach($chuyenBays as $cb)
    <tr>
        <td>{{ $cb->id }}</td>
        <td>{{ $cb->ma_chuyen_bay }}</td>
        <td>{{ $cb->diem_di }}</td>
        <td>{{ $cb->diem_den }}</td>
        <td>{{ $cb->gio_khoi_hanh }}</td>
        <td>{{ $cb->gio_den }}</td>
        <td>{{ $cb->gia_ve }}</td>
        <td>
            <a href="{{ route('chuyenbay.show', $cb->id) }}">Xem</a> |
            <a href="{{ route('chuyenbay.edit', $cb->id) }}">Sửa</a> |
            <form action="{{ route('chuyenbay.destroy', $cb->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Xóa chuyến bay?')">Xóa</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $chuyenBays->links() }}
@endsection