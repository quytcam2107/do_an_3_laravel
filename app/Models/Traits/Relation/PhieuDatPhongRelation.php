<?php

namespace App\Models\Traits\Relation;


use App\Models\KhachHang;
use App\Models\Phong;


trait PhieuDatPhongRelation{

    public function phongs()
    {
        return $this->hasMany(Phong::class,'ma_phong');
    }
    public function khachhangs()
    {
        return $this->hasMany(KhachHang::class,'ma_khach_hang');
    }
    public function datphong()
    {
        return $this->hasOne(Phong::class,'ma_phong','ma_phong_dat');
    }public function customer()
    {
        return $this->hasOne(KhachHang::class,'ma_khach_hang','ma_khach_hang');
    }
}
