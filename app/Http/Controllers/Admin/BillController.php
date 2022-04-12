<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HoaDon;
use App\Services\Admin\BillServices;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;


class BillController extends Controller
{
    protected $billService;

    public function __construct(BillServices $billService)
    {
        $this->billService = $billService;
    }
    public function getBill(){
        return view('admin.bill.bill');
    }


    public function getBillById(Request $request){
        return $request->id;
    }
    public function createBill(Request $request){
       $bill = $this->billService->createBill($request->all());
       return response()->json($bill);
    }
    

}
