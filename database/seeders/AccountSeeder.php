<?php

namespace Database\Seeders;

use App\Models\ChucVu;
use App\Models\TaiKhoan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rand = rand(1, 12);
        $mat_khau = "xxxxxxxx";
        for ($i = 1; $i <= 5; $i++) {
            if ($i == 1) {
                $tai_khoan = new  TaiKhoan();
                $tai_khoan->ma_tai_khoan = 1;
                $tai_khoan->ma_chuc_vu = rand(1, 5);
                $tai_khoan->ma_nhan_vien = rand(1, 2);
                $tai_khoan->ten_dang_nhap = "gian_doc_" . rand(1, 5);
                $tai_khoan->mat_khau = Hash::make($mat_khau);
                $tai_khoan->tinh_trang = 1;
                $tai_khoan->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $tai_khoan->save();
            }
            if ($i == 2) {
                $tai_khoan = new  TaiKhoan();
                $tai_khoan->ma_tai_khoan = 2;
                $tai_khoan->ma_chuc_vu = 1;
                $tai_khoan->ma_nhan_vien = 2;
                $tai_khoan->ten_dang_nhap = "gian_doc_" .$i;
                $tai_khoan->mat_khau = Hash::make($mat_khau);
                $tai_khoan->tinh_trang = 1;
                $tai_khoan->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $tai_khoan->save();
            }
            if ($i == 3) {
                $tai_khoan = new  TaiKhoan();
                $tai_khoan->ma_tai_khoan = 3;
                $tai_khoan->ma_chuc_vu = 2;
                $tai_khoan->ma_nhan_vien = 3;
                $tai_khoan->ten_dang_nhap = "nhan_vien_1".$i;
                $tai_khoan->mat_khau = Hash::make($mat_khau);
                $tai_khoan->tinh_trang = 1;
                $tai_khoan->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $tai_khoan->save();
            }
            if ($i == 4) {
                $tai_khoan = new  TaiKhoan();
                $tai_khoan->ma_tai_khoan = 4;
                $tai_khoan->ma_chuc_vu = 2;
                $tai_khoan->ma_nhan_vien = 4;
                $tai_khoan->ten_dang_nhap = "nhan_vien_2".$i;
                $tai_khoan->mat_khau = Hash::make($mat_khau);
                $tai_khoan->tinh_trang = 1;
                $tai_khoan->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $tai_khoan->save();
            }
            if ($i == 5) {
                $tai_khoan = new  TaiKhoan();
                $tai_khoan->ma_tai_khoan = 5;
                $tai_khoan->ma_chuc_vu = 2;
                $tai_khoan->ma_nhan_vien = 5;
                $tai_khoan->ten_dang_nhap = "nhan_vien_".$i;
                $tai_khoan->mat_khau = Hash::make($mat_khau);
                $tai_khoan->tinh_trang = 1;
                $tai_khoan->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
                $tai_khoan->save();
            }
        }

    }
}
