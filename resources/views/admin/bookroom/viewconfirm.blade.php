@extends('layouts.app')
@section('title','➢ Book phòng ')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
/>
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
/>
<!-- MDB -->
<link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
    rel="stylesheet"
/>
@section('css')
    <style>

        .col-md-7 {
            width: 1200px;
        }

        .col-md-5 {
            width: 100px;

        }

        .card-body {
            box-shadow: 10px 5px 5px #cdcdcb;
        }

        .modal.left_modal, .modal.right_modal {
            position: fixed;
            z-index: 99999;
        }

        .modal.left_modal .modal-dialog,
        .modal.right_modal .modal-dialog {
            position: fixed;
            margin: auto;
            width: 32%;
            height: 100%;
            -webkit-transform: translate3d(0%, 0, 0);
            -ms-transform: translate3d(0%, 0, 0);
            -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
        }

        .modal-dialog {
            /* max-width: 100%; */
            margin: 1.75rem auto;
        }

        @media (min-width: 576px) {
            .left_modal .modal-dialog {
                max-width: 100%;
            }

            .right_modal .modal-dialog {
                max-width: 100%;
            }
        }

        .modal.left_modal .modal-content,
        .modal.right_modal .modal-content {
            /*overflow-y: auto;
              overflow-x: hidden;*/
            height: 100vh !important;
        }

        .modal.left_modal .modal-body,
        .modal.right_modal .modal-body {
            padding: 15px 15px 30px;
        }

        /*.modal.left_modal  {
            pointer-events: none;
            background: transparent;
        }*/

        .modal-backdrop {
            display: none;
        }

        /*Left*/
        .modal.left_modal.fade .modal-dialog {
            left: -50%;
            -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
            -o-transition: opacity 0.3s linear, left 0.3s ease-out;
            transition: opacity 0.3s linear, left 0.3s ease-out;
        }

        .modal.left_modal.fade.show .modal-dialog {
            left: 0;
            box-shadow: 0px 0px 19px rgba(0, 0, 0, .5);
        }

        /*Right*/
        .modal.right_modal.fade .modal-dialog {
            right: -50%;
            -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
            -o-transition: opacity 0.3s linear, right 0.3s ease-out;
            transition: opacity 0.3s linear, right 0.3s ease-out;
        }


        .modal.right_modal.fade.show .modal-dialog {
            right: 0;
            box-shadow: 0px 0px 19px rgba(0, 0, 0, .5);
        }

        /* ----- MODAL STYLE ----- */
        .modal-content {
            border-radius: 0;
            border: none;
        }


        .modal-header.left_modal, .modal-header.right_modal {

            padding: 10px 15px;
            border-bottom-color: #EEEEEE;
            background-color: #FAFAFA;
        }

        .modal_outer .modal-body {
            /*height:90%;*/
            overflow-y: auto;
            overflow-x: hidden;
            height: 91vh;
        }

        .display_none {
            display: none;
        }

        .grid-margin {
            margin-top: 20px;
        }

        .row {
            background: white;
        }

        .card-img-absolute {
            width: 200px;
        }

        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
        .modal-content{
            background: #9ca3af;
            border-radius: 5px;
        }
    </style>
@endsection

@section('main-content')
<div class="">
    <div class="col-lg-12">
        <div class="card">
            {{-- {{dd($data)}} --}}
            @foreach ($data as $key)
            <div class="card-body">
                <h4 class="card-title">Thông tin khách hàng</h4>
                <p>Tên khách hàng : {{ $key->customer['ho_ten_khach']}}</p>
                <p>Địa chỉ : {{ $key->customer['dia_chi']}}</p>
                <p>Giới tính: {{ $key->customer['gioi_tinh']}}</p>
                <p>Địa chỉ : {{ $key->customer['so_cmnd']}}</p>
                <h4 class="card-title">Thông tin phòng</h4>
                <p>Tên phòng : {{ $key->datphong['ten_phong']}}</p>
                <p>Giá Phòng : {{ $key->datphong['gia_phong']}}</p>
                <p>Tiền đặt cọc : {{ $key->tien_dat_coc}}</p>
                <p>Dự kiến trả phòng : {{ $key->date_book}}</p>
                <p>Thời gian thuê : {{ $key->count_day }}</p>
                <form method="POST" action="{{ route('admin.bookroom.confirm') }}">
                    @csrf
                    <input class="d-none" name="id_customer" value="{{ $key->ma_khach_hang}}">
                    <input class="d-none" name="booking_code" value="{{ $key->ma_phieu_dat_phong}}">
                    <input class="d-none" name="room_code" value="{{ $key->ma_phong_dat}}">
                     <button type="submit">Xác nhận đặt phòng</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection


