<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function showStaff(){
//        $title = ['title' => '➢ Nhân Viên '];
//        return view('admin.staff.show_staff')->with($title);
        $accounts = TaiKhoan::with('taikhoan')->get();
       foreach ($accounts as $account){
           echo "<br>";
           echo $account->ma_tai_khoan;
           echo "<br>";
           echo $account->ten_dang_nhap;
           echo "<br>";
           echo $account->taikhoan->ten_nhan_vien;
       }
    }
}
