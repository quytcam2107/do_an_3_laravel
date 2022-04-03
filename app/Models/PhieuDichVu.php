<?php

namespace App\Models;

use App\Models\Traits\Relation\PhieuDichVuRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PhieuDichVu extends Model
{
    use HasFactory;
    use SoftDeletes;
    use PhieuDichVuRelation;

    protected $table = 'phieu_dich_vus';
    protected $primaryKey = "ma_phieu_dich_vu";

    protected $fillable = [
        'ma_phieu_dich_vu',
        'ma_dich_vu',
        'ma_phieu_dat_phong',
        'so_luong',
    ];
    protected $hidden = [
        '',
    ];
}
