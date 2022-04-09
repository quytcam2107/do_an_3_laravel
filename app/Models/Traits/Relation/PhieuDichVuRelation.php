<?php

namespace App\Models\Traits\Relation;

use App\Models\DichVu;
use App\Models\PhieuDichVu;

trait PhieuDichVuRelation{

    public function dichvus()
    {
        return $this->hasMany(DichVu::class,'ma_dich_vu','ma_dich_vu');
    }
    public function maphieudichvu(){
        return $this->hasMany(PhieuDichVu::class,'ma_phieu_dich_vu');
    }
}
