<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class ApiBillController extends Controller
{
        public function getApiBill(){
            $users =DB::table('hoa_dons')->select('*')
            ->join('phieu_dat_phongs', 'phieu_dat_phongs.ma_phieu_dat_phong', '=', 'hoa_dons.ma_phieu_dat_phong')
            ->join('phongs', 'phongs.ma_phong', '=', 'phieu_dat_phongs.ma_phong_dat')
            ->join('nhan_viens', 'nhan_viens.ma_nhan_vien', '=', 'hoa_dons.nguoi_tao')
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

        // public function getApiBill(){
        //     $users =DB::table('hoa_dons')->select('*')
        //     ->join('phieu_dat_phongs', 'phieu_dat_phongs.ma_phieu_dat_phong', '=', 'hoa_dons.ma_phieu_dat_phong')
        //     ->join('phongs', 'phongs.ma_phong', '=', 'phieu_dat_phongs.ma_phong_dat')
        //     ->join('nhan_viens', 'nhan_viens.ma_nhan_vien', '=', 'hoa_dons.nguoi_tao')
        //     ->join('khach_hangs', 'khach_hangs.ma_khach_hang', '=', 'phieu_dat_phongs.ma_khach_hang')
        //     ->get();

        //     return $users;
        // }



}
