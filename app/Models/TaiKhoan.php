<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable
{
    use HasFactory;
    protected $table = 'tai_khoans';
    protected $primaryKey = 'ma_nhan_vien';
    protected $fillable = [
        'ma_tai_khoan',
        'ma_nhan_vien',
        'ten_dang_nhap',
        'mat_khau',
        'ma_chuc_vu',
        'tinh_trang',
    ];
    public function taikhoan()
    {
        return $this->hasOne(NhanVien::class,'ma_nhan_vien','ma_tai_khoan');
    }
    protected $hidden = [
        'mat_khau',
    ];
}
