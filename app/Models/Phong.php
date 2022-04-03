<?php

namespace App\Models;

use App\Models\Traits\Relation\PhongRelation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;
    use PhongRelation;

    public const ROOM_MAINTENANCE = 0;
    public const ROOM_READY = 1;
    public const ROOM_CLEANING = 2;
    public const ROOM_USING = 3;
    public const ROOM_ODERED = 4;

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

    public function scopeStatusready()
    {
        $query = Phong::where('tinh_trang_phong', '=', Phong::ROOM_READY);
        return $query;
    }
    public function scopeStatususing()
    {
        $query = Phong::where('tinh_trang_phong', '=', Phong::ROOM_USING);
        return $query;
    }
}
