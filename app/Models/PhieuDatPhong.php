<?php

namespace App\Models;

use App\Models\Scopes\BookRoomScope as ScopesBookRoomScope;
use App\Models\Traits\Attribute\BookRoomAttribute;
use App\Models\Traits\Relation\PhieuDatPhongDatPhongRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PhieuDatPhong extends Model
{
    use HasFactory;
    use PhieuDatPhongDatPhongRelation;
    use SoftDeletes;
    use BookRoomAttribute;


    protected $table = 'phieu_dat_phongs';
    protected $primaryKey = 'ma_phieu_dat_phong ';
    protected $fillable = [
        'ma_khach_hang',
        'ma_phong_dat',
        'so_nguoi_di_kem',
        'tien_dat_coc',
        'ngay_den',
        'ngay_di',
        'nguoi_tao_phieu',
        'ghi_chu'
    ];

    protected $hidden = [

    ];
    // protected static function booted()
    // {
    //     static::addGlobalScope(new ScopesBookRoomScope);
    // }
}
