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
       $roomBill =  $this->roompass->where('ma_phieu_dat_phong',$params['book_room_id'])->get();
  
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
            $room = $this->room->where('ma_phong',$params['idRoom'])->first();
            $room->update([
                'tinh_trang_phong' => 1
            ]);

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
        public function chart(){
            $textMonth = "Tháng ";
            $totalMoneyMonth = 0;
            for($i = 1;$i <= 12;$i++){
                $lable[$i] = $textMonth.$i;
                // $billMoneyMonth[$i] = $this->bill->select("SUM(tong_tien) as total")->whereMonth('created_at',$i)->get();
                $billMoneyMonth[$i] = DB::table('hoa_dons')
                    ->select(DB::raw('sum(tong_tien) as total'))
                    ->whereMonth('created_at',$i)
                    ->get();
            }
            // dd($billMoneyMonth[4][0]->total);
            for($i = 1;$i <= 12;$i++){
                switch($i){
                    case 1:
                        $month1 = $billMoneyMonth[$i][0]->total;
                    case 2:
                        $month2 = $billMoneyMonth[$i][0]->total;
                    case 3:
                        $month3 = $billMoneyMonth[$i][0]->total;
                    case 4:
                        $month4 = $billMoneyMonth[$i][0]->total;
                    case 5:
                        $month5 = $billMoneyMonth[$i][0]->total;
                    case 6:
                        $month6 = $billMoneyMonth[$i][0]->total;
                    case 7:
                        $month7 = $billMoneyMonth[$i][0]->total;
                    case 8:
                        $month8 = $billMoneyMonth[$i][0]->total;
                    case 9:
                        $month9 = $billMoneyMonth[$i][0]->total;
                    case 10:
                        $month10 = $billMoneyMonth[$i][0]->total;
                    case 11:
                        $month11 = $billMoneyMonth[$i][0]->total;
                    case 12:
                        $month12 = $billMoneyMonth[$i][0]->total;

                }

            }

            // $billMoneyMonth =$this->bill->whereMonth('created_at',2)->get();
            return [
                'lable' => $lable,
                'billMoneyMonth' => [
                    'month1' => $month1,
                    'month2' => $month2,
                    'month3' => $month3,
                    'month4' => $month4,
                    'month5' => $month5,
                    'month6' => $month6,
                    'month7' => $month7,
                    'month8' => $month8,
                    'month9' => $month9,
                    'month10' => $month10,
                    'month11' => $month11,
                    'month12' => $month12,
                ]
            ];
        }
}
