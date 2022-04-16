<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HoaDon;
use App\Services\Admin\BillServices;
use Illuminate\Http\Request;

class ApiDashController extends Controller
{
     /*
        var
    */
    protected $billServices;

    public function __construct(BillServices $billServices)
    {
        $this->billServices = $billServices;
    }
    public function getTotalMoney(){
        $dash = $this->billServices->getTotalMoney();
        return $dash;
    }
}
