<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function viewStaff(){
        return 'day la trang test admin';
    }
}
