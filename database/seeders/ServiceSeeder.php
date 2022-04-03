<?php

namespace Database\Seeders;

use App\Models\DichVu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            if ($i == 1) {
                $dich_vu = new  DichVu();
                $dich_vu->ma_dich_vu = 1;
                $dich_vu->ten_dich_vu = "Gửi xe";
                $dich_vu->gia_dich_vu = 50000;
                $dich_vu->mo_ta = "Null";
                $dich_vu->save();
            }
            if ($i == 2) {
                $dich_vu = new  DichVu();
                $dich_vu->ma_dich_vu = 2;
                $dich_vu->ten_dich_vu = "Giặt ủi quần áo";
                $dich_vu->gia_dich_vu = 60000;
                $dich_vu->mo_ta = "Null";
                $dich_vu->save();
            }
            if ($i == 3) {
                $dich_vu = new  DichVu();
                $dich_vu->ma_dich_vu = 3;
                $dich_vu->ten_dich_vu = "Xe Đưa đón sân bay";
                $dich_vu->gia_dich_vu = 120000;
                $dich_vu->mo_ta = "Null";
                $dich_vu->save();
            }

        }

    }
    }
