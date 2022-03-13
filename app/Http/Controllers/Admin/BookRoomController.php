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
        $title = '➢ Book phòng ';
        $rooms_ready = DB::table('phongs')->where('tinh_trang_phong', 1)->get();
        $rooms_using = DB::table('phongs')->where('tinh_trang_phong', 3)->get();
        $customers = DB::table('khach_hangs')->get();
        return view('admin.bookroom.book_room')->with([
            'title' => $title,
            'rooms_ready' => $rooms_ready,
            'rooms_using' => $rooms_using,
            'customers' => $customers
        ]);
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
}
