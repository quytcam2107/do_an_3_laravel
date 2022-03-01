<?php

namespace App\Models\Traits\Relation;

use App\Models\TaiKhoan;
use App\Models\NhanVien;

trait TaiKhoanNhanVienRelation{
    public function taikhoan()
    {
        return $this->hasOne(NhanVien::class,'ma_nhan_vien','ma_tai_khoan');
    }
}
