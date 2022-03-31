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
    <div class="row">
        <h2>Đặt phòng</h2>
        <p class="pp">Số lượng phòng trống :{{count($rooms_ready)}} </p>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'room_ready')">Phòng sẵn sàng</button>
            <button class="tablinks" onclick="openCity(event, 'room_using')">Phòng đang sử dụng</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Chờ nhận phòng</button>
        </div>

        <div id="room_ready" class="tabcontent">
            <h3>DS Phòng Trống</h3>
            @foreach($rooms_ready as $room)
{{--                <input type="text" id="name_room" value="" class="d-none">--}}
                <div class="col-md stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder">
                        <div class="card-body">
                            <img src="{{$room->anh_phong}}" class="card-img-absolute" alt="no_image">
                            <h4 class="font-weight-normal mb-3">{{$room->ten_phong}} <i
                                    class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <span>
                            Mô tả :{{$room->mo_ta}}
                            <br>
                        </span>
                            <h6 class="card-text">
                                Tình Trạng :<br><br> Có thể đặt phòng
                            </h6>
                            <button id="btn_book_room" type="button" class="btn btn-primary"
                                    onclick="addModalBookRoom({{$room->ma_phong}},'{{$room->ten_phong}}',{{$room->gia_phong}})" data-toggle="modal"
                                    data-target="#modalQuickView">Đặt Phòng Này
                            </button>
                            {{--                            <a class="btn btn-gradient-primary" href="{{'bookroom/getBookRoomById/'.$room->ma_phong}}">Đặt phòng này</a>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="room_using" class="tabcontent">
            @if(strlen($rooms_using) < 3 )
                <h3>Không có phòng nào đang sử dụng</h3>
            @else
                <h3>Có <span style="color: #0a58ca;">{{count($rooms_using)}}</span> phòng đang được sử dụng</h3>
            @endif
            @if(!empty($rooms_using))
                @foreach($rooms_using as $room)
                    <div class="col-md stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{$room->anh_phong}}" class="card-img-absolute" alt="no_image">
                                <h4 class="font-weight-normal mb-3">{{$room->ten_phong}} <i
                                        class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                </h4>
                                <span>
                            Mô tả :{{$room->mo_ta}}
                            <br>
                        </span>
                                <h6 class="card-text">
                                    Tình Trạng :<br><br> Khách đang sử
                                </h6>
                                <a class="btn btn-gradient-primary" href="#">Xem</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div id="Tokyo" class="tabcontent">
            <h3>Phòng đang được đặt</h3>
            @if(strlen($rooms_odered) < 3 )
                <h3>Không có phòng nào đang sử dụng</h3>
            @else
                <h3>Có <span style="color: #0a58ca;">{{count($rooms_odered)}}</span> phòng đang chờ confirm</h3>
            @endif
            @if(!empty($rooms_odered))
                @foreach($rooms_odered as $room)
                    <div class="col-md stretch-card grid-margin">
                        <div class="card bg-gradient-danger card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{$room->anh_phong}}" class="card-img-absolute" alt="no_image">
                                <h4 class="font-weight-normal mb-3">{{$room->ten_phong}} <i
                                        class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                </h4>
                                <span>
                            Mô tả :{{$room->mo_ta}}
                            <br>
                        </span>
                                <h6 class="card-text">
                                    Tình Trạng :<br><br> Khách đang sử
                                </h6>
                                <a class="btn btn-gradient-primary" href="{{'bookroom/viewconfirm/'.$room->ma_phong}}">Kiểm Tra & Xác Nhận</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    @include('admin.bookroom.modal')
@endsection
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>
@section('js')
    <script type="text/javascript" src="{{ url('js/admin/bookroom.js') }}"></script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endsection


