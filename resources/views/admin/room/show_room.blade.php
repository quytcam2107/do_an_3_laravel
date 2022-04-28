@extends('layouts.app')
@section('title',$title)
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
@section('css')
    <style>

        .col-md-7{
            width: 1200px;
        }
        .col-md-5{
            width: 100px;

        }
        .card-body{
            box-shadow: 10px 5px 5px #cdcdcb;
        }
        .modal.left_modal, .modal.right_modal{
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
        @media (min-width: 576px)
        {
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
        .modal.left_modal.fade .modal-dialog{
            left: -50%;
            -webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
            -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
            -o-transition: opacity 0.3s linear, left 0.3s ease-out;
            transition: opacity 0.3s linear, left 0.3s ease-out;
        }

        .modal.left_modal.fade.show .modal-dialog{
            left: 0;
            box-shadow: 0px 0px 19px
            rgba(0,0,0,.5);
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
            box-shadow: 0px 0px 19px
            rgba(0,0,0,.5);
        }

        /* ----- MODAL STYLE ----- */
        .modal-content {
            border-radius: 0;
            border: none;
        }



        .modal-header.left_modal, .modal-header.right_modal {

            padding: 10px 15px;
            border-bottom-color:
                #EEEEEE;
            background-color:
                #FAFAFA;
        }

        .modal_outer .modal-body {
            /*height:90%;*/
            overflow-y: auto;
            overflow-x: hidden;
            height: 91vh;
        }
        .display_none{
            display: none;
        }

    </style>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Phòng</h4>
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                            <th>ID</th>
                            <th>Tên Phòng</th>
{{--                            <th>Mã loại phòng</th>--}}
{{--                            <th>Tầng</th>--}}
                            <th>Mô tả</th>
{{--                            <th>Giá Phòng</th>--}}

                            <th>Tình Trạng Phòng</th>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr class="
                                    @if($room->tinh_trang_phong == 0){{'table-danger'}}
                                    @endif
                                @if($room->tinh_trang_phong == 2){{'table-warning'}}
                                @endif
                                    " id="{{$room->ma_phong}}">
                                    <td>{{$room->ma_phong ?? '-'}}</td>
                                    <td>{{$room->ten_phong ?? '-'}}</td>
                                    <td class="display_none">{{$room->ma_loai_phong ?? '-'}}</td>
                                    <td class="display_none">{{$room->tang ?? '-'}}</td>
                                    <td>{{$room->mo_ta ?? '-'}}</td>
                                    <td class="display_none">{{$room->gia_phong ?? '-'}}</td>

                                    @if($room->tinh_trang_phong == 0)
                                        <td ><button type="button" class="btn btn-gradient-danger btn-rounded btn-fw">Phòng đang bảo trì</button></td>
                                    @endif
                                    @if($room->tinh_trang_phong == 1)
                                        <td><button type="button" class="btn btn-gradient-success btn-fw">Có thể sử dụng</button></td>
                                    @endif
                                    @if($room->tinh_trang_phong == 2)
                                        <td ><button value="{{$room->ma_phong}}" type="button" class="btn btn-gradient-warning btn-rounded btn-fw no-clear">Chưa dọn dẹp</button></td>
                                    @endif
                                    @if($room->tinh_trang_phong == 3)
                                        <td ><button type="button" class="btn btn-gradient-warning btn-rounded btn-fw">Đang sử dụng</button></td>
                                    @endif
                                    @if($room->tinh_trang_phong == 4)
                                        <td ><button type="button" class="btn btn-gradient-danger btn-rounded btn-fw">Đã có người đặt</button></td>
                                    @endif
                                    <td>
                                        <button class="btn  btn-success get_data  mt-3 btn_edit"  id="{{$room->ma_phong}}">Sửa</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                        <ul>
                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))"></span>Tổng số phòng  :<span class="float-right">{{count($rooms)}}</span>
                            </li>
                            {{--                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(6, 185, 157, 1), rgba(132, 217, 210, 1))"></span>Direct Click<span class="float-right">30%</span></li>--}}
                            {{--                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))"></span>Bookmarks Click<span class="float-right">40%</span></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('tpl.modal')

@endsection
@section('js')
    <script type="text/javascript" src="{{ url('js/admin/room.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
                $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });
            $('.no-clear').on('click', function () {
                var id = $(this).val();
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.room.updateStatus') }}",
                    data: {
                        id:id
                    },
                    dataType: "json",
                    success: function (response) {
                        alert("Đã dọn dẹp xong , Có thể sử dụng !");
                        window.location.reload();
                    }
                });
            });
        });
    </script>
@endsection


