@extends('layouts.app')
@section('title','Chi tiết hóa đơn')
<meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
@section('css')
@endsection

@push('css-datatable')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css"/>
@endpush

@section('main-content')
{{-- {{ dd($data['servicesUse']) }} --}}

<input type="text" class="d-none" id="idRoomPass" value="{{ $data['roomPass'][0]->ma_phieu_dat_phong }}">
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
                    <div class="p-2 w-10"> Phòng :</div>

                    <div class="p-2"> {{ $data['roomInfo'][0]->ten_phong }}</div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="p-2 w-10"> Gía phòng :</div>
                    <div class="p-2"> {{ $data['roomInfo'][0]->gia_phong}} <small>(VND/Ngày đêm)</small></div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="p-2"> Loại phòng :</div>
                    <div class="p-2">
                        @if ($data['roomInfo'][0]->ma_loai_phong == 1)
                                {{ 'Standard (STD)' }}
                        @endif
                        @if ($data['roomInfo'][0]->ma_loai_phong == 2)
                        {{ 'Superior (SUP)' }}
                        @endif
                        @if ($data['roomInfo'][0]->ma_loai_phong == 3)
                        {{ 'Deluxe (DLX)' }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-wrap">
                    <div class="p-2 w-10"> Thời gian nhận phòng :</div>

                    <div class="p-2"> {{ $data['roomPass'][0]->created_at }}</div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="p-2 w-10"> Thời gian trả phòng :</div>
                    <div class="p-2"> {{ $data['billInfo'][0]->created_at}}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="text-center">------------------ Tính tiền ------------------</h4>
            <table>
                <tr>
                    <th>Tên dịch vụ</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>

                </tr>
                @foreach ($data['servicesUse'] as $key)
                    <tr>
                        <td>
                        @foreach ($key->dichvus as $value)
                                {{ $value->ten_dich_vu }}
                        @endforeach
                        </td>
                        <td>
                            @foreach ($key->dichvus as $value)
                                {{ number_format($value->gia_dich_vu)}}
                            @endforeach
                        </td>
                        <td>
                            {{ $key->so_luong }}
                        </td>
                        <td></td>
                    </tr>
                @endforeach

                <tr style="border-bottom: 1px solid black;">
                    <td>Tiền phòng </td>
                    <td> {{ number_format($data['roomInfo'][0]->gia_phong)}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td><h4>Tổng Cộng</h4></td>
                    <td> {{ number_format($data['totalMoneyServices'] + $data['roomInfo'][0]->gia_phong) }}</td>
                </tr>
                <tr>
                    <td style="display: flex;
                    align-items: center;
                    flex-direction: column-reverse;"><h6 >Tiền đặt cọc</h6></td>
                    <td colspan="2"> {{ number_format($data['roomPass'][0]->tien_dat_coc) }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="display: flex;
                    align-items: center;
                    flex-direction: column-reverse;"><h6>Số tiền thanh toán còn lại</h6></td>
                    <td colspan="2"> <span class="text-danger">{{ number_format(($data['totalMoneyServices'] + $data['roomInfo'][0]->gia_phong) - $data['roomPass'][0]->tien_dat_coc) }}VND</span></td>
                    <td></td>
                </tr>

            </table>
            <button class="btn-test"></button>
            <span id="okela"></span>
        </div>
    </div>
</div>


@endsection


@push('js-datatable')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js"></script>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        var idRoomPass = $('#idRoomPass').val();
     $('.btn-test').click(function (e) {
           $.ajax({
               type: "POST",
               url: "{{ route('admin.bill.getQuantitySerice') }}",
               data:{
                    idRoomPass:idRoomPass
               },
               dataType: "json",
               success: function (response) {
                   console.log(response.servicesUse);
                   var total = 0;
                   for (const [key, value] of Object.entries(response.servicesUse)) {
                        console.log(`${key}: ${value.so_luong}`);
                        total = total +value.so_luong;
                    }
                   $('#okela').html(total);
               }
           });
        });
    });
</script>
@endpush
