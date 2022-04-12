<?php

namespace App\Models;

use App\Models\Traits\Relation\HoaDonRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDon extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HoaDonRelation;

    protected $table = 'hoa_dons';
    protected $primaryKey = "ma_hoa_don";

    protected $fillable = [
        'ma_hoa_don',
        'ma_phieu_dat_phong',
        'ma_dich_vu',
        'tong_tien',
        'nguoi_tao',
    ];
    protected $hidden = [
        '',
    ];
}
