<?php

namespace Database\Seeders;

use App\Models\Phong;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1;$i <= 10;$i++){
                $rand = rand(1,12);
                $room = new Phong();
                $ma_loai_phong = rand(1,3);
                $gia_phong = rand(100000,3000000);
                $room->ma_phong = $i;
                $room->ten_phong = 'P'.'.'.$i.'0'.$i+1;
                $room->ma_loai_phong = $ma_loai_phong;
                $room->tang = rand(1,5);
                $room->gia_phong = $gia_phong;
                $room->mo_ta = 'Mô tả test';
                $room->anh_phong = 'https://media.istockphoto.com/photos/luxury-resort-picture-id104731717?k=20&m=104731717&s=612x612&w=0&h=40INtJRzhmU1O4Rj24zdY8vj4aGsWpPaEfojaVQ8xBo=';
                $room->gia_phong = $gia_phong;
                $room->tinh_trang_phong = 1;
                $room->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $room->save();
            }

        }
}
