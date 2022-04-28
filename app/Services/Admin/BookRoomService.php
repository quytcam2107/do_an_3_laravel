<?php

namespace App\Services\Admin;

use App\Models\DichVu;
use App\Models\KhachHang;
use App\Models\PhieuDatPhong;
use App\Models\PhieuDichVu;
use App\Models\Phong;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use  App\Models\Traits\Relation\PhieuDatPhongDatPhongRelation;
use Illuminate\Support\Facades\Session;

class BookRoomService
{
    protected $customer;

    protected $roompass;

    protected $rooms;

    protected $services;

    protected $billServices;

    public function __construct(PhieuDatPhong $roompass, Phong $rooms, KhachHang $customer,DichVu $services,PhieuDichVu $billServices)
    {
        $this->model = $roompass;
        $this->room = $rooms;
        $this->customer = $customer;
        $this->services = $services;
        $this->billServices = $billServices;
    }

    public function index()
    {
        $rooms_ready = $this->room->where('tinh_trang_phong', Phong::ROOM_READY)->get();
        $rooms_using = $this->room->where('tinh_trang_phong', Phong::ROOM_USING)->get();
        $rooms_odered = $this->room->where('tinh_trang_phong', Phong::ROOM_ODERED)->get();
        $customer = $this->customer->get();
        return [
            'rooms_ready' => $rooms_ready,
            'rooms_using' => $rooms_using,
            'customers' => $customer,
            'rooms_odered' => $rooms_odered,
        ];
    }

    public function insertRoomPass($params)
    {
        $statusBook = $params['statusBook'];
            if($statusBook == 0){
                $roomInsert = $this->model->create([
                    'ma_khach_hang' => $params['customerID'],
                    'ma_phong_dat' => $params['roomId'],
                    'so_nguoi_di_kem' => $params['attachmentNumber'],
                    'tien_dat_coc' => $params['deposit'],
                    'ngay_den' => $params['dayTo'],
                    'ngay_di' => $params['dayOut'],
                    'nguoi_tao_phieu' => Session::get('loginId'),
                    'ghi_chu' => $params['memo'],
                ]);
                $roomUpdateStatus = $this->room->where('ma_phong', $params['roomId'])->update(['tinh_trang_phong' => Phong::ROOM_ODERED]);
            }
            else{
                $roomInsert = $this->model->create([
                    'ma_khach_hang' => $params['customerID'],
                    'ma_phong_dat' => $params['roomId'],
                    'so_nguoi_di_kem' => $params['attachmentNumber'],
                    'tien_dat_coc' => $params['deposit'],
                    'ngay_den' => $params['dayTo'],
                    'ngay_di' => $params['dayOut'],
                    'nguoi_tao_phieu' => Session::get('loginId'),
                    'ghi_chu' => $params['memo'],
                ]);
                $roomUpdateStatus = $this->room->where('ma_phong', $params['roomId'])->update(['tinh_trang_phong' => Phong::ROOM_USING]);
            }


    }

    public function getCustomerById($id)
    {
        $customer = $this->customer->find($id);
        return response()->json(['data' => $customer]);
    }
    public function viewConfirm($id){
        $room =  PhieuDatPhong::with('datphong','customer')->where('ma_phong_dat',$id)
        ->orderBy('phieu_dat_phongs.ma_phieu_dat_phong', 'DESC')
        ->first();
        return $room;
    }
    public function conFirmBookRoom($params){
        $room = $this->room->where('ma_phong',$params['room_code'])->update(['tinh_trang_phong' => Phong::ROOM_USING]);
        return $room;
    }
    public function inforRoomUsring($params){
        $infoRoom =  PhieuDatPhong::with('phongs','khachhangs')->where('ma_phong_dat',$params['room_code'])->orderBy('ma_phieu_dat_phong', 'DESC')->first();
        $roomPassId = $infoRoom['ma_phieu_dat_phong'];
        $usingService =  PhieuDichVu::with('dichvus','maphieudichvu')->where('ma_phieu_dat_phong',$roomPassId)->get();
        $services = $this->services->get();

        return [
            'inforRoom' => $infoRoom,
            'usingsServices' => $usingService,
            'services' => $services
        ];

    }
    public function inserServices($params){
        $roomBill =$this->billServices->where([
            'ma_dich_vu' => $params['id_service'],
            'ma_phieu_dat_phong' => $params['data_id_service']
        ])->get();

        if(count($roomBill) == 0){
              $roomBills = $this->billServices->create([
             'ma_dich_vu' => $params['id_service'],
             'ma_phieu_dat_phong' => $params['data_id_service'],
         ]);
        }

        else{
            $roomBills =$this->billServices->find($roomBill[0]['ma_phieu_dich_vu']);
            $i = $roomBills['so_luong'] + $params['quantity'];
                $roomBills->update([
                    'so_luong' => $i
                ]);

         }
         $roomBills =  $this->services->where('ma_dich_vu',$params['id_service'])->first();


        // $insertService = $this->services->get();
        return $roomBills;
    }
public function userBook($params){
    $this->customer->create([
        'ho_ten_khach' => $params['fullname'],
        'email' => $params['email'],
        'so_dien_thoai' => $params['phone'],
        'dia_chi' => $params['address'],
        'gioi_tinh' => $params['gender'],
        'so_cmnd' => $params['passport'],
        'ghi_chu' => $params['specialrequired'],
        'quoc_tich' => $params['national'],
    ]);
    $customer = $this->customer->get()->last();
    $this->model->create([
        'ma_khach_hang' => $customer['ma_khach_hang'],
        'ma_phong_dat' => $params['idRoom'],
        'so_nguoi_di_kem' => $params['people'],
        'ngay_den' => $params['checkIn'],
        'ngay_di' => $params['checkOut'],
    ]);
    $this->room->where('ma_phong', $params['idRoom'])->update(['tinh_trang_phong' => Phong::ROOM_ODERED]);
}
}
