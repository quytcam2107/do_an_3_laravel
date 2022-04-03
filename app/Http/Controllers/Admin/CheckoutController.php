<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\CheckOutServices;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $checkout;

    public function __construct(CheckOutServices $checkout)
    {
        $this->checkout = $checkout;
    }

    public function checkOut()
    {
        $data = $this->checkout->CheckOutServices();
        // return view('admin.checkout.checkout',compact('data'));
        return $data;
    }
}
