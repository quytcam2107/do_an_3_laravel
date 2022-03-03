<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phong;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function showRoom(){
        $title = '➢ Phòng ';
        $rooms = Phong::all();
        return view('admin.room.show_room',compact('title','rooms'));
    }
}
