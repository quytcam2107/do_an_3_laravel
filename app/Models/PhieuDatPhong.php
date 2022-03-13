<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuDatPhong extends Model
{
    use HasFactory;

    public const ROOM_MAINTENANCE = 0;
    public const ROOM_READY = 1;
    public const ROOM_CLEANING = 2;
    public const ROOM_USING = 3;
    public const ROOM_ODERED = 4;

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
}
