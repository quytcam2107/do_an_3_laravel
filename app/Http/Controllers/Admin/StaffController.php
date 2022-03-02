<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function showStaff(){
        $title = '➢ Nhân Viên ';
        $accounts = TaiKhoan::with('taikhoan')->get();
        return view('admin.staff.show_staff',compact('accounts','title'));
//        return ($accounts);
    }
}
