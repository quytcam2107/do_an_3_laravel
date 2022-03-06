<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\CustomerService;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    protected $customerServices;

    public function __construct(CustomerService $customerService)
    {
        $this->customerServices = $customerService;
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
