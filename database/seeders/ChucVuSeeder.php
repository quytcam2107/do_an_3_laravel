<?php

namespace Database\Seeders;

use App\Models\ChucVu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChucVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1;$i <= 2; $i++){
            if($i == 1){
                $rand = rand(1, 12);
                $chuc_vu = new ChucVu();
                $chuc_vu->ma_chuc_vu = 1;
                $chuc_vu->ten_chuc_vu = 'Giám đốc';
                $chuc_vu->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $chuc_vu->save();
            }
            else{
                $chuc_vu = new ChucVu();
                $rand = rand(1, 12);
                $chuc_vu->ma_chuc_vu = 2;
                $chuc_vu->ten_chuc_vu = 'Nhân viên';
                $chuc_vu->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $chuc_vu->save();
            }
        }
    }
}
