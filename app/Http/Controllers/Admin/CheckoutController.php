<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $checkout;

    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function checkOut()
    {
        $data = $this->checkout->getListCheckout();
        return view('admin.checkout.checkout',compact('data'));
    }
}
