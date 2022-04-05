<?php

namespace App\Services\Admin;

use App\Models\HoaDon;
use App\Models\PhieuDatPhong;
use App\Models\PhieuDichVu;
use App\Models\Phong;

class BillServices{

    protected $bill;
    protected $roompass;
    protected $rooms;
    protected $billServices;
    public function __construct(HoaDon $bill,PhieuDatPhong $roompass,PhieuDichVu $billServices,Phong $rooms)
    {
        $this->bill = $bill;
        $this->roompass = $roompass;
        $this->room = $rooms;
        $this->billServices = $billServices;
    }
    public function createBill($params){
       $roomBill =  $this->roompass->where('ma_phong_dat',$params['book_room_id'])->get();
        $updateStatusRoom = $this->room->update(['tinh_trang_phong' => Phong::ROOM_CLEANING]);
       $serviceUse = $this->billServices->where('ma_phieu_dat_phong',$params['book_room_id'])->get();
        $bill = $this->bill->create([
            'ma_phieu_dat_phong' => $params['book_room_id'],
        ]);
        return [
            'bill' => $bill,
            'roomBill' => $roomBill,
            'serviceUse' => $serviceUse,
            'roomsStatus' => $updateStatusRoom
        ];

    }
}
