<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhieuDatPhong;
use App\Services\Admin\BookRoomService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookRoomController extends Controller
{
    protected $bookRoomService;

    public function __construct(BookRoomService $bookRoomService)
    {
        $this->bookRoomService = $bookRoomService;
    }

    public function bookRoom()
    {
        $data = $this->bookRoomService->index();
        return view('admin.bookroom.book_room')->with($data);
    }

    public function getFormBookRoom(Request $request)
    {
       return view('admin.bookroom.addbookroom');

    }

    public function addRoomPass(Request $request)
    {
        $input = $request->all();
        $result = $this->bookRoomService->insertRoomPass($input);
        return response()->json($result);
    }
    public function viewConfirm(Request $request){
        $data = $this->bookRoomService->viewConfirm($request->id);
         return view('admin.bookroom.viewconfirm',compact('data'));
    }
    public function conFirmBookRoom(Request $request){
        $data = $this->bookRoomService->conFirmBookRoom($request->all());
        return redirect()->route('admin.bookroom.index')->with(['msg' => 'Đặt phòng thành công','data' => $data]);;
    }
    public function inforRoomUsring(Request $request){

        $data = $this->bookRoomService->inforRoomUsring($request->all());
        // dd($data);
        return view('admin.bookroom.viewbookroomusing',compact('data'));
    }
    public function deleteSoft(){
        PhieuDatPhong::where('ma_phieu_dat_phong',2)->delete();
    }
}
