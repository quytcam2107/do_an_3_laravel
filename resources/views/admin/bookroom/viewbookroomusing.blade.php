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

                    <h4 class="card-title"><i class="mdi mdi-account-check mr-2"></i>Thông tin người sử dụng </h4>
                    <div class="row">
                        <div class="col-md-6"><p>Khách hàng</p></div>
                        <div class="col-md-6">{{ $key->ho_ten_khach }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p>Địa chỉ</p></div>
                        <div class="col-md-6">{{ $key->dia_chi }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><pGiới tính</p></div>
                        <div class="col-md-6">{{ $key->gioi_tinh == 1 ? "Nam" : "Nữ" }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p>Số điện thoại</p></div>
                        <div class="col-md-6">{{ "0".$key->so_dien_thoai }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p>Số CMND</p></div>
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
                    <h4 class="card-title"><i class="mdi mdi-home-map-marker mr-2"></i>Thông tin phòng sử dụng</h4>
                    <div class="row">
                        <div class="col-md-6"><p>Thời gian nhận phòng</p></div>
                        <div class="col-md-6">{{ $key->ngay_den }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p>Ngày trả phòng</p></div>
                        <div class="col-md-6">{{ $key->ngay_di }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p>Tiền đặt cọc</p></div>
                        <div class="col-md-6">{{ $key->tien_dat_coc }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><p>Đã sử dụng được</p></div>
                        <div class="col-md-6">{{ $key->count_house }}</div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body card-pd-0">
                    <h4 class="card-title"><i class="mdi mdi-view-agenda mr-2"></i>Dịch vụ sử dụng</h4>
                    {{-- {{ dd($data['usingsServices']) }} --}}
                    <div class="row">
                        <div class="col-md-6">Tên dịch vụ</div>
                        <div class="col-md-6">Số lượng</div>
                    </div>
                    @if (count($data['usingsServices']) < 1)
                       <code>Không có dịch vụ nào được sử dụng</code>
                    @endif

                        @foreach ($data['usingsServices'] as $key)
                        <div class="row mt-2">

                                @foreach ($key->dichvus as $k)
                                    <div class="col-md-6"><p class="card-description"> {{ $k->ten_dich_vu }}</p></div>
                                    <div class="col-md-6"><p> {{ $key->so_luong }}</p></div>
                                @endforeach
                        </div>
                        @endforeach
                    <form>
                        <div class="btn-center">
                            <a href="" class="btn btn-info btn-rounded btn-fw">Thêm dịch vụ cho phòng này</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('js')
@endsection
