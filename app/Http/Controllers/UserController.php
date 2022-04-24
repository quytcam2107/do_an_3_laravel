<?php

namespace App\Http\Controllers;


use App\Models\Scopes\BookRoomScope;
use App\Services\Admin\BookRoomService;
use App\Services\Admin\RommService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $bookRoomService;
    protected $roomServices;

    public function __construct(BookRoomService $bookRoomService,RommService $roomServices)
    {
        $this->bookRoomService =  $bookRoomService;
        $this->roomService =  $roomServices;
    }
    public function viewRoom(Request $req){
        $data = $this->roomService->getInfoRoom($req->id);
        return view('web.viewroom',compact('data'));
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
    public function booking(Request $req){
        $data = $req->all();
        return view('web.booking',compact('data'));
    }
    public function bookings(Request $req){
        return $req->all();
    }
}
