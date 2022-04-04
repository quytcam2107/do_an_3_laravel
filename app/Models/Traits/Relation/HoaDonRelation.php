<?php

namespace App\Models\Traits\Relation;


use App\Models\PhieuDichVu;


trait HoaDonRelation{
    public function phieudichvus()
    {
        return $this->hasMany(PhieuDichVu::class,'ma_phieu_dich_vu','ma_hoa_don');
    }

}
