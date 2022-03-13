<?php

namespace App\Services\Admin;

use App\Models\PhieuDatPhong;
use App\Models\Phong;

class BookRoomService
{
    protected $customer;

    protected $roompass;

    protected $rooms;

    public function __construct(PhieuDatPhong $roompass, Phong $rooms)
    {
        $this->model = $roompass;
        $this->room = $rooms;
    }

    public function insertRoomPass($params)
    {
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
        $roomUpdateStatus = $this->room->where('ma_phong',$params['roomId'])->update(['tinh_trang_phong' => 0]);
    }

    public function getCustomerById($id)
    {
        $customer = $this->customer->find($id);
        return response()->json(['data' => $customer]);
    }
}
