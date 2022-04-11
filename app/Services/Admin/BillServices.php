<?php

namespace App\Services\Admin;

use App\Models\DichVu;
use App\Models\HoaDon;
use App\Models\KhachHang;
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

    protected $customer;

    public function __construct(HoaDon $bill,PhieuDatPhong $roompass,PhieuDichVu $billServices,Phong $rooms,DichVu $services,KhachHang $customer)
    {
        $this->bill = $bill;
        $this->roompass = $roompass;
        $this->room = $rooms;
        $this->billServices = $billServices;
        $this->services = $services;
        $this->customer = $customer;
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
     public function getBillById($id){

            $bill =  $this->bill->where('ma_hoa_don',$id)->get();
            $roompass = $this->roompass->where('ma_phieu_dat_phong',$bill[0]->ma_phieu_dat_phong)->get();
            $customer =  $this->customer->find($roompass[0]->ma_khach_hang);

            $roomInfo = $this->room->where('ma_phong',$roompass[0]->ma_phong_dat)->get();

            $services = $this->billServices->with('dichvus')->where('ma_phieu_dat_phong',$bill[0]->ma_phieu_dat_phong)->get();

            return [
                'infoCustomer' => $customer,
                'servicesUse' => $services,
                'roomPass' => $roompass,
                'roomInfo' => $roomInfo,
                'billInfo' => $bill,
                // 'totalMoney' => $totalMoney
            ];
        }
}
