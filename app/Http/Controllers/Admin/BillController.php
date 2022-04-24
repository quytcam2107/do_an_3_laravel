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
    public function getBill(){
        return view('admin.bill.bill');
    }


    public function getBillById(Request $request){
        $data = $this->billService->getBillById($request->id);
         return view('admin.bill.billdetail',compact('data'));

    }
    public function createBill(Request $request){
       $bill = $this->billService->createBill($request->all());
       return response()->json($bill);
    }
    public function getQuantitySerice(Request $request){
        $id = $request->idRoomPass;
        $totalQuantity = $this->billService->getBillById($id);
        return response()->json($totalQuantity);
     }
     public function confirmPayment(Request $request){
        $data = $this->billService->confirmPayment($request->all());
         return response()->json($data);
     }


}
