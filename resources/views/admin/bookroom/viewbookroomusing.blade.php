@extends('layouts.app')
@section('title','Sử dụng phòng')

@section('css')
<style>
    .card-pd-0{
        padding: 10px !important;
    }
    .btn-center{
        display: flex;
    }
</style>
@endsection

@section('main-content')
<div class="card">
    <div class="card-body">
        <h1 class="text-center">Name</h1>
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body card-pd-0">

                    {{-- {{ dd($data['inforRoom']) }} --}}
                    @foreach ($data['inforRoom'][0]['khachhangs'] as $key)

                    <h4 class="card-title">Thông tin người sử dụng </h4>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Khách hàng</p></div>
                        <div class="col-md-6">{{ $key->ho_ten_khach }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Địa chỉ</p></div>
                        <div class="col-md-6">{{ $key->dia_chi }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Giới tính</p></div>
                        <div class="col-md-6">{{ $key->gioi_tinh == 1 ? "Nam" : "Nữ" }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Số điện thoại</p></div>
                        <div class="col-md-6">{{ "0".$key->so_dien_thoai }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Số CMND</p></div>
                        <div class="col-md-6">{{ "0".$key->so_cmnd }}</div>
                    </div>
                    <div class="btn-center">
                        <a href="" class="btn btn-gradient-info btn-fw">Xem thông tin tiết</a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body card-pd-0">
                    @foreach ($data['inforRoom'] as $key)
                    <h4 class="card-title">Thông tin sử dụng</h4>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Thời gian nhận phòng</p></div>
                        <div class="col-md-6">{{ $key->ngay_den }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Ngày trả phòng</p></div>
                        <div class="col-md-6">{{ $key->ngay_di }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Tiền đặt cọc</p></div>
                        <div class="col-md-6">{{ $key->tien_dat_coc }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p><i class="mdi mdi-account mr-2"></i>Đã sử dụng được</p></div>
                        <div class="col-md-6">{{ $key->count_house }}</div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    @foreach ($data['inforRoom'] as $key)
                    <h4 class="card-title">Sử dụng</h4>
                    <div class="row">
                        <div></div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('js')
@endsection
