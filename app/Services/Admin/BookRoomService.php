<?php

namespace App\Services\Admin;

use App\Models\KhachHang;
use App\Models\PhieuDatPhong;
use App\Models\Phong;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use  App\Models\Traits\Relation\PhieuDatPhongDatPhongRelation;

class BookRoomService
{
    protected $customer;

    protected $roompass;

    protected $rooms;

    public function __construct(PhieuDatPhong $roompass, Phong $rooms, KhachHang $customer)
    {
        $this->model = $roompass;
        $this->room = $rooms;
        $this->customer = $customer;
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
        DB::beginTransaction();
        try {
            $roomInsert = $this->model->create([
                'ma_khach_hang' => $params['customerID'],
                'ma_phong_dat' => $params['roomId'],
                'so_nguoi_di_kem' => $params['attachmentNumber'],
                'tien_dat_coc' => $params['deposit'],
                'ngay_den' => $params['dayTo'],
                'ngay_di' => $params['dayOut'],
                'nguoi_tao_phieu' => 1,
                'ghi_chu' => $params['memo'],
            ]);
            $roomUpdateStatus = $this->room->where('ma_phong', $params['roomId'])->update(['tinh_trang_phong' => 4]);
            DB::commit();
        }
       catch (Exception $exception){
            DB::rollBack();
       }
    }

    public function getCustomerById($id)
    {
        $customer = $this->customer->find($id);
        return response()->json(['data' => $customer]);
    }
    public function viewConfirm($id){
        // $idCustomer = PhieuDatPhong::with('customer')->get();

        $room =  PhieuDatPhong::with('datphong','customer')->where('ma_phong_dat',$id)->get();
        // $customers =  PhieuDatPhong::with('khachhang')->where('ma_khach_hang',$room['ma_khach_hang']);
        //  $mer = array_merge(array($room),array($customers));
        return $room;
    }
}
