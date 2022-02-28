<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function showStaff(){
        $title = ['title' => '➢ Nhân Viên '];
        return view('admin.staff.show_staff')->with($title);
    }
}
