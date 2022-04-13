<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use App\Models\PhieuDatPhong;
use App\Models\PhieuDichVu;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('web.home');
    }

    public function themKhachHang(Request $req){
        $add = new KhachHang();
        $add->ho_ten_khach = $req->name;
        $add->email = $req->email;
        $add->so_dien_thoai = $req->phone;
        $add->quoc_tich = $req->quoctich;
        $add->so_cmnd = $req->number;

        $abc = new PhieuDatPhong();
        $abc->ngay_den = $req->ngayDen;
        $abc->ngay_di = $req->ngayDi;
        $abc->so_nguoi_di_kem = $req->quantity;
        $abc->tien_dat_coc = $req->tiendatcoc;

        $them = new PhieuDichVu();
        $them->so_luong = $req->room;

        $add->save();
        $abc->save();
        $them->save();

       
        return redirect()->back()->with('success','Chúc mừng bạn đã đặt phòng thành công');
    }
}
