<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookRoomController extends Controller
{
    public function bookRoom(){
        $title = '➢ Book phòng ';
        $rooms_ready = DB::table('phongs')->where('tinh_trang_phong',1)->get();
        $rooms_using = DB::table('phongs')->where('tinh_trang_phong',3)->get();
        return view('admin.bookroom.book_room')->with([
            'title'=> $title,
            'rooms_ready'=>$rooms_ready,
            'rooms_using'=>$rooms_using
        ]);
    }
    public function bookRoombyId(Request $request){
       $input = $request->id;
       return "Đặt phòng cho id :".$input;
    }
}
