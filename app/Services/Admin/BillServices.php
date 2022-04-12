<?php

namespace App\Services\Admin;

use App\Models\DichVu;
use App\Models\HoaDon;
use App\Models\PhieuDatPhong;
use App\Models\PhieuDichVu;
use App\Models\Phong;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class BillServices{

    protected $bill;
    protected $roompass;
    protected $rooms;
    protected $billServices;
    protected $services;

    public function __construct(HoaDon $bill,PhieuDatPhong $roompass,PhieuDichVu $billServices,Phong $rooms,DichVu $services)
    {
        $this->bill = $bill;
        $this->roompass = $roompass;
        $this->room = $rooms;
        $this->billServices = $billServices;
        $this->services = $services;
    }
    public function createBill($params){
       $roomBill =  $this->roompass->where('ma_phong_dat',$params['book_room_id'])->get();
       $idRoom = $roomBill[0]['ma_phong_dat'];
       $updateStatusRoom = $this->room->find($idRoom)->update(['tinh_trang_phong' => 2]);
       $serviceUse = $this->billServices->where('ma_phieu_dat_phong',$params['book_room_id'])->get();
        $bill = $this->bill->create([
            'ma_phieu_dat_phong' => $params['book_room_id'],
            'nguoi_tao' => Session::get('loginId'),
        ]);
        return [
            'bill' => $bill,
            'roomBill' => $roomBill,
            'serviceUse' => $serviceUse,
            'roomsStatus' => $updateStatusRoom
        ];

    }
}
