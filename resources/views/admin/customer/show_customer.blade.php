@extends('layouts.app')
@section('title','Khách hàng')
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
    </style>
@endsection

@section('main-content')
    <div class="col-lg-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Khách hàng</h4>
                <p class="card-description"> Add class <code>.table-bordered</code>
                </p>
                <table class="table table-bordered">
                    <thead>
                    <th>ID</th>
                    <th>Họ Tên</th>
                    <th>Địa chỉ</th>
                    <th>Giới tính</th>
                    </thead>
                   <tbody>
                   @foreach($customers as $customer)
                       <tr>
                           <td>{{$customer->ma_khach_hang}}</td>
                           <td>{{$customer->ho_ten_khach}}</td>
                           <td>{{$customer->dia_chi}}</td>
                           <td>{{$customer->gioi_tinh ==1 ? 'nam' : 'Nữ'}}</td>
                       </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{ url('js/admin/room.js') }}"></script>
@endsection


