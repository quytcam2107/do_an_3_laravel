<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DichVu extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'dich_vus';
    protected $primaryKey = "ma_dich_vu";

    protected $fillable = [
        'ma_dich_vu',
        'ten_dich_vu',
        'gia_dich_vu',
        'mo_ta',
    ];
    protected $hidden = [
        '',
    ];
}
