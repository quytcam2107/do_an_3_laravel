<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use App\Models\PhieuDatPhong;
use App\Models\PhieuDichVu;
use App\Models\Scopes\BookRoomScope;
use App\Services\Admin\BookRoomService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $bookRoomService;

    public function __construct(BookRoomService $bookRoomService)
    {
        $this->bookRoomService =  $bookRoomService;
    }
    public function viewRoom(Request $req){
        return view('web.viewroom');
    }
    public function index(){
        $data = $this->bookRoomService->index();
        $data = $data['rooms_ready'];
        return view('web.home',compact('data'));
    }

    public function themKhachHang(Request $req){
        return $req->all();
        // return redirect()->back()->with('success','Chúc mừng bạn đã đặt phòng thành công');
    }
}
