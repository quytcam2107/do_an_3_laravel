<?php

namespace App\Models\Traits\Scope;


trait BookRoomScope
{
    public function scopeGetAllBookRoom($query,$id){
        return $query->where('ma_phieu_dat_phong',$id);
    }

}
