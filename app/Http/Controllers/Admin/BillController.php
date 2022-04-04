<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\BillServices;
use Illuminate\Http\Request;

class BillController extends Controller
{
    protected $billService;

    public function __construct(BillServices $billService)
    {
        $this->billService = $billService;
    }
    public function createBill(Request $request){
       $bill = $this->billService->createBill($request->all());
       return response()->json($bill);
    }
}
