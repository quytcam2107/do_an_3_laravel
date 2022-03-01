<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relation\TaiKhoanNhanVienRelation;

class NhanVien extends Model
{
    use TaiKhoanNhanVienRelation;

    protected $table = 'nhan_viens';
    protected $primaryKey = "ma_nhan_vien";

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
