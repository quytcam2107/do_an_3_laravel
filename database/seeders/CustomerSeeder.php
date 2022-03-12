<?php

namespace Database\Seeders;

use App\Models\KhachHang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
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
            $dia_chi = array("Lào Cai","Hà Nội","Hưng Yên","Hồ Chí Minh");
            $customer = new KhachHang();
            $ma_loai_phong = rand(1,3);
            $customer->ma_khach_hang = $i;
            $customer->ho_ten_khach = 'Khách hàng'.$i;
            $customer->email = 'khachhang_'.$i.'@example.com';
            $customer->dia_chi = array_rand($dia_chi);
            $customer->gioi_tinh = rand(0,1);
            $customer->so_dien_thoai = "03".rand(11111111,99999999);
            $customer->quoc_tich = "Việt Nam";
            $customer->so_cmnd = "03".rand(11111111,99999999);
            $customer->ghi_chu = "Ghi Chú Test";
            $customer->created_at = 10010 . date('y') . (($rand < 10) ? ('0' . $rand) : $rand);
            $customer->save();
        }
    }
}
