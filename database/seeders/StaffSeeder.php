<?php

namespace Database\Seeders;

use App\Models\NhanVien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1;$i <= 5;$i++){
            if ($i == 1){
                $staff = new NhanVien();
                $rand = rand(1,12);
                $staff->ma_nhan_vien = 1;
                $staff->ten_nhan_vien = "Giám đốc ".$i;
                $staff->gioi_tinh = rand(0,1);
                $staff->ngay_sinh = "2001"."-".rand(1,12)."-".rand(1,28);
                $staff->so_dien_thoai = "03".rand(11111111,99999999);
                $staff->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $staff->save();
            }
            if ($i == 2){
                $staff = new NhanVien();
                $rand = rand(1,12);
                $staff->ma_nhan_vien = $i;
                $staff->ten_nhan_vien = "Giám đốc ".$i;
                $staff->gioi_tinh = rand(0,1);
                $staff->ngay_sinh = "2001"."-".rand(1,12)."-".rand(1,28);
                $staff->so_dien_thoai = "03".rand(11111111,99999999);
                $staff->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $staff->save();
            }
            if ($i == 3){
                $staff = new NhanVien();
                $rand = rand(1,12);
                $staff->ma_nhan_vien = $i;
                $staff->ten_nhan_vien = "Nhân Viên ".$i;
                $staff->gioi_tinh = rand(0,1);
                $staff->ngay_sinh = "2001"."-".rand(1,12)."-".rand(1,28);
                $staff->so_dien_thoai = "03".rand(11111111,99999999);
                $staff->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $staff->save();
            }
            if ($i == 4){
                $staff = new NhanVien();
                $rand = rand(1,12);
                $staff->ma_nhan_vien = $i;
                $staff->ten_nhan_vien = "Nhân Viên ".$i;
                $staff->gioi_tinh = rand(0,1);
                $staff->ngay_sinh = "2001"."-".rand(1,12)."-".rand(1,28);
                $staff->so_dien_thoai = "03".rand(11111111,99999999);
                $staff->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $staff->save();
            }
            if ($i == 5){
                $staff = new NhanVien();
                $rand = rand(1,12);
                $staff->ma_nhan_vien = $i;
                $staff->ten_nhan_vien = "Nhân Viên ".$i;
                $staff->gioi_tinh = rand(0,1);
                $staff->ngay_sinh = "2001"."-".rand(1,12)."-".rand(1,28);
                $staff->so_dien_thoai = "03".rand(11111111,99999999);
                $staff->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $staff->save();
            }
        }
    }
}
