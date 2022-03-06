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
       .grid-margin{
           margin-top: 20px;
       }
        .row{
            background: white;
        }
        .card-img-absolute{
            width: 200px;
        }
        .card-img-absolute:hover{

        }
    </style>
@endsection

@section('main-content')
    <div class="row">
        <h4 class="card-title">Đặt phòng</h4>
        @foreach($rooms as $room)

            <div class="col-md-4 stretch-card grid-margin">
                <div class="
                @if($room->tinh_trang_phong == 1)
                {{"card bg-gradient-info card-img-holder"}}
                @else
                {{"card bg-gradient-danger card-img-holder text-white"}}
                @endif
"
                >
                    <div class="card-body">
                       <a href="{{'bookroom/getBookRoomById/'.$room->ma_phong}}"> <img src="{{$room->anh_phong}}" class="card-img-absolute" alt="no_image" ></a>
                        <h4 class="font-weight-normal mb-3">{{$room->ten_phong}} <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <span>
                            Mô tả :{{$room->mo_ta}}
                            <br>
                        </span>
                        <h6 class="card-text">
                            @if($room->tinh_trang_phong == 1)
                               Tình Trạng :<br><br> Có thể đặt phòng
                            @endif
                        </h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{ url('js/admin/room.js') }}"></script>
@endsection


