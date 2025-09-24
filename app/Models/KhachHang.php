<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KhachHang extends Model
{
    use HasFactory;

    protected $table = 'khach_hangs'; // bảng trogng DB
    protected $fillale = ['ten', 'email','so_dien_thoai']; // cho phép insert/update
}
