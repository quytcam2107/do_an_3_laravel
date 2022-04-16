<?php

namespace App\Services\Admin;

use App\Models\DichVu;
use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\PhieuDatPhong;
use App\Models\PhieuDichVu;
use App\Models\Phong;
use Illuminate\Support\Facades\DB;
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
            $servicess = DB::table('phieu_dich_vus')
            ->join('dich_vus','dich_vus.ma_dich_vu','=','phieu_dich_vus.ma_dich_vu')
            // ->select(DB::raw('sum(gia_dich_vu) as total'))
            ->where('ma_phieu_dat_phong',$bill[0]->ma_phieu_dat_phong)->get();
            $total =0;
            foreach ($servicess as $key => $value) {
                $total = $total + $value->gia_dich_vu * $value->so_luong;
            }
            return [
                'infoCustomer' => $customer,
                'servicesUse' => $services,
                'roomPass' => $roompass,
                'roomInfo' => $roomInfo,
                'billInfo' => $bill,
                'totalMoneyServices' => $total
                // 'totalMoney' => $totalMoney
            ];
        }
        public function getQuantitySerice($id){
             $data = $this->billServices->where('ma_phieu_dat_phong',$id)->get();
             $services = $this->services->get();
            return [
                'data' => $data,
                'services' => $services
            ];
        }
        public function confirmPayment($params){
            $infoBIll = $this->bill->where('ma_hoa_don',$params['idBill'])->first();
            $infoBIll->update([
                'tong_tien' => $params['totalMoney']
                ]
            );
            return [
                'infoBill' => $infoBIll
            ];
        }

        public function getTotalMoney(){
            $month = date('m');
            $billMonthCurrent =$this->bill->whereMonth('created_at',$month)->get();
            $billLastMonth =$this->bill->whereMonth('created_at',$month - 1)->get();
            $totalCurrentMoney = 0;
            $totalMoneyLastMonth = 0;
            foreach($billMonthCurrent as $value){
                $totalCurrentMoney = $totalCurrentMoney + $value->tong_tien;
            }

            foreach($billLastMonth as $value){
                $totalMoneyLastMonth = $totalMoneyLastMonth + $value->tong_tien;
            }
            $percent = ($totalCurrentMoney - $totalMoneyLastMonth)/$totalMoneyLastMonth *100;

            return [
                'totalMonthCurrent' =>
                        ['total'=>$totalCurrentMoney,
                         'percent' => $percent
                        ],
                'totalLastCurrent' => [
                          'total' => $totalMoneyLastMonth,
                          'month' => $month -1
                        ],

            ];
        }
}
