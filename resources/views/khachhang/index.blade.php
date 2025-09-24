@extends('layouts.app')

@section('title','Danh sách khách hàng')

@section('content')
    <h1>Danh sách khách hàng</h1>

    <a class="button" href="{{ route('khachhang.create') }}">+ Thêm khách hàng</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>ID</th><th>Tên</th><th>Email</th><th>SĐT</th><th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($khachHangs as $kh)
                <tr>
                    <td>{{ $kh->id }}</td>
                    <td><a href="{{ route('khachhang.show', $kh->id) }}">{{ $kh->ten }}</a></td>
                    <td>{{ $kh->email }}</td>
                    <td>{{ $kh->so_dien_thoai }}</td>
                    <td>
                        <a href="{{ route('khachhang.edit', $kh->id) }}">Sửa</a>
                        <form action="{{ route('khachhang.destroy', $kh->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Không có khách hàng</td></tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top:10px">
        {{ $khachHangs->links() }}
    </div>
@endsection
