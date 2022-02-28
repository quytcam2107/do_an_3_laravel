<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'nhan_viens';
    protected $primaryKey = "ma_nhan_vien";
    public function thong_tin_nhan_vien()
    {
       return $this->belongsTo(TaiKhoan::class,'ma_tai_khoan','ma_nhan_vien');
    }
    protected $fillable = [
        'ma_nhan_vien',
        'ten_nhan_vien',
        'gioi_tinh',
        'ngay_sinh',
        'so_dien_thoai',
    ];
    protected $hidden = [
        '',
    ];
}
