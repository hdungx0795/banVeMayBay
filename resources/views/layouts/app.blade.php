<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'BanVeMayBay')</title>
    <style>
      body{font-family: Arial, sans-serif;margin:20px}
      table{border-collapse:collapse;width:100%}
      table td, table th{border:1px solid #ddd;padding:8px}
      a.button{display:inline-block;padding:6px 10px;background:#2d87f0;color:#fff;text-decoration:none;border-radius:4px}
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('khachhang.index') }}">Khách hàng</a>

        {{-- Nếu layout cần hiển thị thông tin cụ thể của 1 khách hàng (chỉ làm khi biến tồn tại) --}}
        @isset($khachhang)
            | <a href="{{ route('khachhang.show', $khachhang->id) }}">Đang xem: {{ $khachhang->ten }}</a>
        @endisset
    </nav>

    <hr>

    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    @yield('content')
</body>
</html>
