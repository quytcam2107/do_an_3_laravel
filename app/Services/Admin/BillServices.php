<?php

namespace App\Services\Admin;

use App\Models\HoaDon;
use App\Models\PhieuDatPhong;
use App\Models\PhieuDichVu;

class BillServices{

    protected $bill;
    protected $roompass;
    protected $billServices;
    public function __construct(HoaDon $bill,PhieuDatPhong $roompass,PhieuDichVu $billServices)
    {
        $this->bill = $bill;
        $this->roompass = $roompass;
        $this->billServices = $billServices;
    }
    public function createBill($params){
       $roomBill =  $this->roompass->where('ma_phong_dat',$params['book_room_id'])->get();

       $serviceUse = $this->billServices->where('ma_phieu_dat_phong',$params['book_room_id'])->get();
        $bill = $this->bill->create([
            'ma_phieu_dat_phong' => $params['book_room_id'],
        ]);
        return [
            'bill' => $bill,
            'roomBill' => $roomBill,
            'serviceUse' => $serviceUse
        ];

    }
}
