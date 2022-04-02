<?php

namespace App\Models\Traits\Relation;

use App\Models\KhachHang;
use App\Models\Phong;
use App\Models\PhieuDatPhong;

trait PhongPhieuDatPhongRelation{
    public function phong()
    {
        return $this->hasOne(Phong::class,'ma_phong_dat','ma_phong');
    }

}
