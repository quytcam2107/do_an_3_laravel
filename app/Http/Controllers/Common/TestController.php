<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\PhieuDatPhong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function test(Request $request){
        return Session::get('loginId');
    }
    public function deleteSoft(){
        PhieuDatPhong::where('ma_phieu_dat_phong',2)->delete();
    }
    public function testReQuest(Request $request){
        return $request->all();
    }
}
