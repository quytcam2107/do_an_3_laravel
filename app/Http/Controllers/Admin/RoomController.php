<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phong;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function showRoom(){
        $title = '➢ Phòng ';
        $type_room = config('constants.tinh_trang_phong');
        $rooms = Phong::all();
        return view('admin.room.show_room',compact('title','rooms','type_room'));
    }
    public function getRoomById(Request $request){
        $id = $request->id;
        $data = Phong::find($id);
        return response(status: 200);
    }
    public function insertRoom(Request $request){
        $input = $request->all();
        DB::table('phongs')->insert($input);
        return redirect()->back();
    }
    public function updateStatus(Request $request){
        $room = Phong::find($request->id)->update(['tinh_trang_phong' => 1]);
        return response()->json($room);
    }
}
