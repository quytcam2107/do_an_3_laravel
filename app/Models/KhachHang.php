<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    protected $table = 'khach_hangs';
    protected $primaryKey = 'ma_khach_hang';
    protected $fillable = [
        'ma_khach_hang',
        'ho_ten_khach',
        'email',
        'dia_chi',
        'gioi_tinh',
        'so_dien_thoai',
        'quoc_tich',
        'so_cmnd'
    ];

    protected $hidden = [

    ];
//     public function getAgeAttribute()
// {
//     return \Carbon::createFromFormat('Y-m-d', $this->dob)->diffInYears(\Carbon::now());
// }
}
