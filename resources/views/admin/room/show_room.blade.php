@extends('layouts.app')
@section('title',$title)
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
@section('css')
    <style>

        .col-md-7{
            width: 1100px;
        }
        .col-md-5{
            width: 500px;

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
    </style>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Phòng</h4>
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                            <th>ID</th>
                            <th>Tên Phòng</th>
                            <th>Mô tả</th>
                            <th>Tình trạng</th>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr class="
                                    @if($room->tinh_trang_phong == 0){{'table-danger'}}
                                    @endif
                                    " id="{{$room->ma_phong}}">
                                    <td>{{$room->ma_phong ?? '-'}}</td>
                                    <td>{{$room->ten_phong ?? '-'}}</td>
                                    <td>{{$room->mo_ta ?? '-'}}</td>
                                    @if($room->tinh_trang_phong == 0)
                                        <td ><button type="button" class="btn btn-gradient-danger btn-fw">Phòng đang bảo trì</button></td>
                                    @endif
                                    @if($room->tinh_trang_phong == 1)
                                        <td><button type="button" class="btn btn-gradient-success btn-fw">Có thể sử dụng</button></td>
                                    @endif
                                    <td>
                                    <button data-datac="{{$room->ma_phong}}" >View</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                        <ul>
                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))"></span>Tổng số phòng đang có :<span class="float-right">{{count($rooms)}}</span>
                            </li>
                            {{--                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(6, 185, 157, 1), rgba(132, 217, 210, 1))"></span>Direct Click<span class="float-right">30%</span></li>--}}
                            {{--                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))"></span>Bookmarks Click<span class="float-right">40%</span></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <button class="btn  btn-primary  mt-3" id="modal_view_left" data-toggle="modal"  data-target="#get_quote_modal">Tab Trái</button>

                <button class="btn  btn-success  mt-3" id="modal_view_right" data-toggle="modal" data-target="#information_modal">Tab Phải</button>
            </div>
        </div>
    </div>

    <!-- left modal -->
    <div class="modal modal_outer left_modal fade" id="get_quote_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
        <div class="modal-dialog" role="document">
            <form method="post"  id="get_quote_frm">
                <div class="modal-content ">
                    <!-- <input type="hidden" name="email_e" value="admin@filmscafe.in"> -->
                    <div class="modal-header">
                        <h2 class="modal-title">Get a quote</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body get_quote_view_modal_body">

                        <div class="form-row">

                            <div class="form-group col-sm-6">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required="" id="name" name="name">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" required="" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group  col-sm-12">
                                <label for="contact">Mobile Number <span class="text-danger">*</span></label>
                                <input type="email" required="" class="form-control" id="contact" name="contact">
                            </div>

                            <div class="form-group  col-sm-12">
                                <label for="message">Type Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Cancel</button>
                        <button type="submit" class="btn btn-primary" id="submit_btn">Submit</button>
                    </div>

                </div><!-- //modal-content -->
            </form>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
    <!-- //left modal -->

    <!-- left modal -->
    <div class="modal modal_outer right_modal fade" id="information_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
        <div class="modal-dialog" role="document">
            <form method="post"  id="get_quote_frm">
                <div class="modal-content ">
                    <!-- <input type="hidden" name="email_e" value="admin@filmscafe.in"> -->
                    <div class="modal-header">
                        <h2 class="modal-title">Thông tin phòng</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body get_quote_view_modal_body">
                        <p>dat la riht</p>
                    </div>

                </div><!-- modal-content -->
            </form>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
@endsection
<script>
    $(document).on('click', '#table button', function (e) {
        var d = $(this).data('datac');
       alert(d);

    })
</script>

