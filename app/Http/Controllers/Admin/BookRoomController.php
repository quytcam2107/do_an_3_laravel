<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phong;
use Illuminate\Http\Request;

class BookRoomController extends Controller
{
    public function bookRoom(){
        $title = '➢ Book phòng ';
        $rooms = Phong::all();
        return view('admin.bookroom.book_room')->with([
            'title'=> $title,
            'rooms'=>$rooms
        ]);
    }
    public function bookRoombyId(Request $request){
       $input = $request->id;
       return "Đặt phòng cho id :".$input;
    }
}
