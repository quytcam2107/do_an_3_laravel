<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class ApiBillController extends Controller
{

        public function getApiBill(){
            $users =DB::table('hoa_dons')->select('hoa_dons.ma_hoa_don','phieu_dat_phongs.*','phieu_dat_phongs.nguoi_tao_phieu','khach_hangs.ho_ten_khach','phongs.ten_phong','nhan_viens.ten_nhan_vien')
            ->join('phieu_dat_phongs', 'phieu_dat_phongs.ma_phieu_dat_phong', '=', 'hoa_dons.ma_phieu_dat_phong')
            ->join('phongs', 'phongs.ma_phong', '=', 'phieu_dat_phongs.ma_phong_dat')
            ->join('nhan_viens', 'nhan_viens.ma_nhan_vien', '=', 'phieu_dat_phongs.nguoi_tao_phieu')
            ->join('khach_hangs', 'khach_hangs.ma_khach_hang', '=', 'phieu_dat_phongs.ma_khach_hang')
            ->get();

            return Datatables::of($users)
            ->addColumn('action', function ($user) {
                $deletebtn = '<a class="btn btn-secondary btn-sm" href=""><i class="fa fa-trash-o"></i></a>';

                return $deletebtn;
            })
            // ->removeColumn('id')
            // ->rawColumns(['action'])
            ->make(true);
    }

}
