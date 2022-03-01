<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Traits\Relation\TaiKhoanNhanVienRelation;

class TaiKhoan extends Authenticatable
{
    use HasFactory;
    use TaiKhoanNhanVienRelation;

    protected $table = 'tai_khoans';
    protected $primaryKey = 'ma_tai_khoan';
    protected $fillable = [
        'ma_tai_khoan',
        'ma_nhan_vien',
        'ten_dang_nhap',
        'mat_khau',
        'ma_chuc_vu',
        'tinh_trang',
    ];

    protected $hidden = [
        'mat_khau',
    ];
}
