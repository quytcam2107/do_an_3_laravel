<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDon extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'hoa_dons';
    protected $primaryKey = "ma_hoa_don";

    protected $fillable = [
        'ma_hoa_don',
        'ma_phieu_dat_phong',
        'ma_dich_vu',
        'tong_tien',
    ];
    protected $hidden = [
        '',
    ];
}
