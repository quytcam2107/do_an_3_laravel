@extends('layouts.app')
@section('title','Sử dụng phòng')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .card-pd-0{
        padding: 10px !important;
    }
    .btn-center{
        display: flex;
    }
    ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: white;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
.pt-5{
    padding: 0px !important;
}
.mt-3{
    margin: 0px !important;
}
.alertt{
    display: grid;
}
</style>
@endsection

@section('main-content')
<ul class="breadcrumb">
    <li><a href="{{ route('admin.bookroom.index') }}">Đặt phòng</a></li>
    <li>Xem thông tin và đặt phòng</li>
  </ul>
<div class="card">
    <div class="card-body">
        <div class="text-center alertt d-none">
            <h3>Tạo hóa đơn thành công</h3>
            <h3>MÃ HÓA ĐƠN </h3>

        </div>
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body card-pd-0">

                    {{-- {{ dd($data['inforRoom'][0]->ma_phieu_dat_phong) }} --}}
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
                            <a  data-toggle="modal" data-target="#servicemodal" class="btn btn-info btn-rounded btn-fw">Thêm dịch vụ cho phòng này</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Bạn muốn tạo hóa đơn cho phòng này ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {{-- <div class="modal-body">
              ...
            </div> --}}
            <div class="modal-footer">
              <button type="button" id="cl_hide" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
              <button id="openModal" type="button" class="btn btn-primary">Đồng ý</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade bd-example-modal-lg" id="servicemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
                Thêm dịch vụ
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="d-none" id="card-service">

                    </div>
                    <div class="card-body">
                        <div class="row">
                        @foreach ($data['services'] as $key)
                            <div class="col-md-6">
                                <div class=""> {{ $key->ten_dich_vu }}</div>
                            </div>
                            <div class="col-md-6">
                                {{-- <button  id="subQuanti">-</button> --}}
                                <span><input class="d-none" type="number"  id="number_services" value="0"></span>
                                <button class="btn-update-quantity btn btn-social-icon btn-linkedin btn-rounded" data-id="{{ $key->ma_dich_vu }}" data-id-service="{{ $data['inforRoom'][0]->ma_phieu_dat_phong }}" data-type="incre" id="plusQuanti">+</button>
                            </div>

                        @endforeach
                    </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" id="close_reload" class="btn btn-secondary" data-dismiss="modal">Quay lại</button>
              {{-- <button id="openModal" type="button" class="btn btn-primary">Đồng ý</button> --}}
            </div>
          </div>
        </div>
      </div>
    {{-- <form method="POST" action="{{ route('admin.bill.createBill') }}"> --}}
        @csrf
        <input class="d-none vl_idroom" id="book_room_id"  name="book_room_id" value="{{ $data['inforRoom'][0]->ma_phieu_dat_phong}}">

        <button id="book" class="btn btn-outline-dark btn-fwo" data-toggle="modal" data-target="#exampleModal">Tạo hóa đơn</button>
    {{-- </form> --}}
    @endforeach
    </div>

</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });

        $('#openModal').click(function (e) {
            var book_room_id = $('#book_room_id').val();
            var route = "/createBill";

            $.ajax({
                type: "post",
                url:"{{ route('admin.bill.createBill') }}",
                data: {
                    book_room_id : book_room_id
                },
                dataType: "json",
                success: function (response) {
                    console.log(response.bill.ma_hoa_don);
                    let link = "<a href="+'getBillById/'+response.bill.ma_hoa_don+">"+'#'+response.bill.ma_hoa_don+"</a>";
                    $("#cl_hide").click();
                    $(".grid-margin").remove();
                    $("#book").remove();
                    $(".alertt").removeClass('d-none');
                    $(".alertt").append(link);
                }
            });
        });

            $('.btn-update-quantity').on('click', function() {
               let id = $(this).attr('data-id');
               let data_id_service = $(this).attr('data-id-service');
               let quantity = 1;

                $.ajax({
                    type: "post",
                    url: "{{ route('admin.bookroom.inserservice') }}",
                    data: {
                        quantity :quantity,
                        id_service : id,
                        data_id_service : data_id_service
                    },
                    dataType: "json",
                    success: function (response) {
                        console.log(response.ten_dich_vu);
                        $text = 'Đã thêm dịch vụ :' + response.ten_dich_vu;
                        $('#card-service').removeClass('d-none');
                        $('#card-service').addClass('alert alert-primary');
                        $('#card-service').html($text);
                    }
                });
            })
            $('#close_reload').click(function (e) {
                window.location.reload();
            });

            // $('#subQuanti').on('click', function() {
            //     let id = $(this).attr('data-id');
            //     alert(id);
            // })

    });
</script>
@endsection
