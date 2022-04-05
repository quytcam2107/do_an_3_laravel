<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use DB;
use Session;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }
    // public function login(Request $request){
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);
    //     $user = TaiKhoan::where('ten_dang_nhap', '=', $request->username)
    //         ->first();
    //     if ($user) {
    //         if (Hash::check($request->password, $user->mat_khau) and $user->tinh_trang == 1) {

    //             $request->session()->put('loginId', $user->ma_tai_khoan);
    //             // $request->session()->put('username', $user->ten_dang_nhap);
    //             return redirect('/admin/');

    //         } else {
    //             return back()->with('fail_password', 'Lỗi đăng nhập ! Sai mật khẩu hoặc tài khoản bạn chưa được kích hoạt');
    //         }
    //     } else {
    //         return back()->with('fail_username', 'Tài khoản không tồn tại');
    //     }
    // }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $user = TaiKhoan::where('ten_dang_nhap', '=', $request->username)
            ->first();
        if ($user) {
            if (Hash::check($request->password, $user->mat_khau) and $user->tinh_trang == 1) {
                $user2 =
                    DB::table('tai_khoans')
                    ->join('nhan_viens', 'nhan_viens.ma_nhan_vien', '=', 'tai_khoans.ma_tai_khoan')
                    ->join('chuc_vus', 'chuc_vus.ma_chuc_vu', '=', 'tai_khoans.ma_chuc_vu')
                    ->where('tai_khoans.ma_tai_khoan', '=', $user->ma_tai_khoan)
                    ->select('tai_khoans.*', 'nhan_viens.ten_nhan_vien', 'chuc_vus.ten_chuc_vu')
                    ->get();

                foreach ($user2 as $users) {
                     $ten_cv =  $users->ten_chuc_vu;
                     $ten_nv =  $users->ten_nhan_vien;
                }
                if($users->ma_chuc_vu == 1){
                    return redirect('/admin/');
                    $request->session()->put('loginId', $user->ma_tai_khoan);
                    $request->session()->put('loginName', $users->ten_nhan_vien);
                    $request->session()->put('loginRole', $users->ten_chuc_vu);
                }
                if($users->ma_chuc_vu == 2){
                    return "code tiep";
                    $request->session()->put('loginId', $user->ma_tai_khoan);
                    $request->session()->put('loginName', $users->ten_nhan_vien);
                    $request->session()->put('loginRole', $users->ten_chuc_vu);
                }


            } else {
                return back()->with('fail_password', 'Lỗi đăng nhập ! Sai mật khẩu hoặc tài khoản bạn chưa được kích hoạt');
            }
        } else {
            return back()->with('fail_username', 'Tài khoản không tồn tại');
        }
    }
    public function logout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect()->route('admin.login.showForm');
        }
    }
}
