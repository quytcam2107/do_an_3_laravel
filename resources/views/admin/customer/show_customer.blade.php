@extends('layouts.app')
@section('title', 'Khách hàng')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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

        .modal.left_modal,
        .modal.right_modal {
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



        .modal-header.left_modal,
        .modal-header.right_modal {

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
    {{-- add new employee modal start --}}
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm khách hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="#" id="add_customer_form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4 bg-light">
                        <div class="row">
                            <div class="col-lg">
                                <label for="ho_ten_khach">Họ tên khách</label>
                                <input type="text" name="ho_ten_khach" class="form-control" placeholder="Họ tên khách ...">
                            </div>
                            <div class="col-lg">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email ...">
                            </div>
                        </div>
                        <div class="my-2">
                            <label for="dia_chi">Địa chỉ</label>
                            <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ ..">
                        </div>
                        <div class="my-2">
                            <label for="gioi_tinh">Giới tính</label>
                            <input type="tel" name="gioi_tinh" class="form-control" placeholder="Giới tính ...">
                        </div>
                        <div class="my-2">
                            <label for="so_dien_thoai">Số điện thoại</label>
                            <input type="tel" name="so_dien_thoai" class="form-control" placeholder="Phone">
                        </div>
                        <div class="my-2">
                            <label for="quoc_tich">Quốc tịch</label>
                            <input type="text" name="quoc_tich" class="form-control" placeholder="Quốc tịch">
                        </div>
                        <div class="my-2">
                            <label for="so_cmnd">Số CMND</label>
                            <input type="text" name="so_cmnd" class="form-control" placeholder="Số CMND ...">
                        </div>
                        <div class="my-2">
                            <label for="ghi_chu">Ghi chú</label>
                            <input type="text" name="ghi_chu" class="form-control" placeholder="Ghi chú ...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="add_customer_btn" class="btn btn-primary">Thêm khách hàng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- add new employee modal end --}}

    {{-- edit employee modal start --}}
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="emp_id" id="emp_id">
                    <input type="hidden" name="emp_avatar" id="emp_avatar">
                    <div class="modal-body p-4 bg-light">
                        <div class="row">
                            <div class="col-lg">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name"
                                    required>
                            </div>
                            <div class="col-lg">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name"
                                    required>
                            </div>
                        </div>
                        <div class="my-2">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                                required>
                        </div>
                        <div class="my-2">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="my-2">
                            <label for="post">Post</label>
                            <input type="text" name="post" id="post" class="form-control" placeholder="Post" required>
                        </div>
                        <div class="my-2">
                            <label for="avatar">Select Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="mt-2" id="avatar">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="edit_employee_btn" class="btn btn-success">Update Employee</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- edit employee modal end --}}

    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Quản lý khách hàng</h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                                class="bi-plus-circle me-2"></i>Thêm khách hàng</button>
                    </div>
                    <div class="card-body" id="show_all_employees">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // load lại dữ lieu
        fetchDataCustomer();

        function fetchDataCustomer() {
            $.ajax({
                url: '{{ route('admin_customer_fetchall') }}',
                method: 'get',
                success: function(response) {
                    $("#show_all_employees").html(response);
                    $("table").DataTable({
                        order: [0, 'desc']
                    });
                }
            });
        }
        // thêm mới 1 khách hàng
        $("#add_customer_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_customer_btn").text('Adding...');
            $.ajax({
                url: '{{ route('admin_store_customer') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Thêm thành công!',
                            'Khách hàng đã được thêm thành công',
                            'Thành công'
                        )
                         fetchDataCustomer();
                    }
                    $("#add_customer_btn").text('Thêm');
                    $("#add_customer_form")[0].reset();
                    $("#addEmployeeModal").modal('hide');
                }
            });
        });
        
    </script>
@endsection
@section('js')

@endsection
