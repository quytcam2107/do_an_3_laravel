<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;

    protected $table = 'phongs';
    protected $primaryKey = 'ma_phong';
    protected $fillable = [
        'ma_phong',
        'ten_phong',
        'ma_loai_phong',
        'mo_ta',
        'gia_phong',
        'tinh_trang_phong',
    ];

    protected $hidden = [

    ];
}
