<?php

namespace App\Services\Admin;

use App\Models\KhachHang;

class CustomerService
{
    protected $customer;

    public function __construct(KhachHang $customer)
    {
        $this->customer = $customer;
    }

    public function getCustomer()
    {
        $customer = $this->customer->get();
        return $customer;
    }
    public function getCustomerById($id)
    {
        $customer = $this->customer->find($id);
        return response()->json(['data'=>$customer]);
    }
}
