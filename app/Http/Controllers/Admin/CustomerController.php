<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KhachHang;
use App\Services\Admin\CustomerService;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    protected $customerServices;

    public function __construct(CustomerService $customerService)
    {
        $this->customerServices = $customerService;
    }
    public function fetchAll(){
        $customers = KhachHang::all();
        $output = '';
        if($customers->count() > 0){
            $output .= '<table class="table table-striped table-sm text-center align-middle" id="tableDT">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Họ tên khách</th>
                                        <th>Email</th>
                                        <th>Địa chỉ</th>
                                        <th>Giới tính</th>
                                        <th>Số điện thoại</th>
                                        <th>Quốc tịch</th>
                                        <th>Số CMND</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                foreach($customers as $customer){
                                    $output .= '<tr>
                                        <td>'.$customer->ma_khach_hang.'</td>
                                        <td>'.$customer->ho_ten_khach.'</td>
                                        <td>'.$customer->email.'</td>
                                        <td>'.$customer->dia_chi.'</td>
                                        <td>'.$customer->gioi_tinh.'</td>
                                        <td>'.$customer->so_dien_thoai.'</td>
                                        <td>'.$customer->quoc_tich.'</td>
                                        <td>'.$customer->so_cmnd.'</td>
                                        <td>'.$customer->ghi_chu.'</td>
                                        <td>
                                        <a href="#" id="' . $customer->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                                        <a href="#" id="' . $customer->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                                        </td>
                                    </tr>';
                                }
                                $output .= '</tbody></table>';
                                echo $output;
        }
        else{
            echo '<h1 class="text-center text-secondary my-5">Không có dữ liệu</h1>';
        }
    }
    public function storeCustomer(Request $request){
        $customerData = [
            'ho_ten_khach' => $request->ho_ten_khach,
            'email' => $request->email,
            'dia_chi'=> $request->dia_chi,
            'gioi_tinh'=> $request->gioi_tinh,
            'so_dien_thoai' => $request->so_dien_thoai,
            'quoc_tich' => $request->quoc_tich,
            'so_cmnd' => $request->so_cmnd,
            'ghi_chu'  => $request->ghi_chu
        ];
        KhachHang::create($customerData);
        return response()->json([
            'status' => 200
        ]);
    }

    public function showCustomer()
    {
        $customers = $this->customerServices->getCustomer();
        return view('admin.customer.show_customer',compact('customers'));
    }

    public function getCustomerById()
    {
        $id = 1;
        $customers = $this->customerServices->getCustomerById($id);

    }
}
