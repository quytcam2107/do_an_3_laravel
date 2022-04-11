@extends('layouts.app')
@section('title','Chi tiết hóa đơn')

@section('css')
@endsection

@push('css-datatable')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css"/>
@endpush

@section('main-content')
<div class="card">
    <div class="card-body">
        <h1 class="text-center">Hóa đơn chi tiết</h1>
        <div class="row mb-4">
            <div class="col">
                    <img class="w-25" src="https://www.pngkey.com/png/full/246-2466707_best-western-sunrise-hotel-logo-png-transparent-best.png">
            </div>
            <div class="col">
                <h4>Ab Hotel</h4>
                <p>Địa chỉ : số 999 - đường 1000 - thành phố  Mộng Mơ</p>
                <p>Số điện thoại: 0123456789JQK</p>
            </div>
        </div>
        <div class="row">
            <h4 class="text-center">THông tin KH</h4>
            <div class="col">
                    <div class="d-flex flex-wrap">
                        <div class="p-2 w-10"> Tên khách hàng :</div>
                        <div class="p-2"> {{ $data['infoCustomer']->ho_ten_khach }}</div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="p-2 w-10"> Địa chỉ :</div>
                        <div class="p-2"> {{ $data['infoCustomer']->dia_chi }}</div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="p-2"> Giới tính :</div>
                        <div class="p-2"> {{ $data['infoCustomer']->gioi_tinh == 1 ? 'Nam' : 'Nữ' }}</div>
                    </div>
            </div>
            <div class="col">
                <div class="d-flex flex-wrap">
                    <div class="p-2 w-10"> Số điện thoại :</div>
                    <div class="p-2"> {{ $data['infoCustomer']->so_dien_thoai }}</div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="p-2 w-10">Quốc tịch :</div>
                    <div class="p-2"> {{ $data['infoCustomer']->quoc_tich }}</div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="p-2"> Số CMND :</div>
                    <div class="p-2"> {{ $data['infoCustomer']->so_cmnd }}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="text-center">----------------------------------------</h4>
            <div class="col">
                <div class="d-flex flex-wrap">
                    <div class="p-2 w-10"> Phòng:</div>
                    <div class="p-2"> {{ $data['infoCustomer']->ho_ten_khach }}</div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="p-2 w-10"> Địa chỉ :</div>
                    <div class="p-2"> {{ $data['infoCustomer']->dia_chi }}</div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="p-2"> Giới tính :</div>
                    <div class="p-2"> {{ $data['infoCustomer']->gioi_tinh == 1 ? 'Nam' : 'Nữ' }}</div>
                </div>
        </div>
        </div>
    </div>
</div>
@endsection


@push('js-datatable')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js"></script>

<script>

</script>
@endpush
