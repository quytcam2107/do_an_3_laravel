{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Đăng nhập</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<form action="{{route('admin.login.login')}}" method="post">--}}
{{--    @if(Session::has('error'))--}}
{{--        <span>{{Session::get('error')}}</span>--}}
{{--    @endif--}}
{{--    @if(Session::has('fail_password'))--}}
{{--        <span>{{Session::get('fail_password')}}</span>--}}
{{--    @endif--}}
{{--    @if(Session::has('fail'))--}}
{{--        <span>{{Session::get('fail')}}</span>--}}
{{--    @endif--}}
{{--        @if(Session::has('fail_username'))--}}
{{--            <span>{{Session::get('fail_username')}}</span>--}}
{{--        @endif--}}
{{--        @if(Session::has('fail_status'))--}}
{{--            <span>{{Session::get('fail')}}</span>--}}
{{--        @endif--}}
{{--    <br>--}}
{{--    @csrf--}}
{{--    <input type="text" placeholder="Tên đăng nhập ..." name="username" value="{{old('username')}}"><br>--}}
{{--    <span style="color: red;">@error('username'){{$message}}@enderror</span><br>--}}
{{--    <input type="password" placeholder="Mật Khẩu ..." name="password" value=""><br>--}}
{{--    <span style="color: red;">@error('password'){{$message}}@enderror</span><br>--}}
{{--    <button type="submit">Đăng Nhập</button>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../tpl_admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../tpl_admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../tpl_admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../tpl_admin/assets/images/favicon.ico" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="https://cdn-icons-png.flaticon.com/512/235/235889.png">
                        </div>
                        <h4>Xin chào ! hãy bắt đầu nào
                        </h4>
                        @if(Session::has('fail'))
                            <h6 class="font-weight-light">{{Session::get('fail')}}</h6>
                            <span></span>
                        @endif
                        @if(Session::has('error'))
                            <span>{{Session::get('error')}}</span>
                        @endif
                        @if(Session::has('fail_password'))
                            <span>{{Session::get('fail_password')}}</span>
                        @endif
                        @if(Session::has('fail_username'))
                            <span>{{Session::get('fail_username')}}</span>
                        @endif
                        @if(Session::has('fail_status'))
                            <span>{{Session::get('fail')}}</span>
                        @endif
                            <form class="pt-3" action="{{route('admin.login')}}" method="post">
                                @csrf
                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit">Đăng Nhập</button>
{{--                                <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="">Đăng nhập</a>--}}
                            </div>
{{--                            <div class="my-2 d-flex justify-content-between align-items-center">--}}
{{--                                <div class="form-check">--}}
{{--                                    <label class="form-check-label text-muted">--}}
{{--                                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>--}}
{{--                                </div>--}}
{{--                                <a href="#" class="auth-link text-black">Forgot password?</a>--}}
{{--                            </div>--}}
{{--                            <div class="mb-2">--}}
{{--                                <button type="button" class="btn btn-block btn-facebook auth-form-btn">--}}
{{--                                    <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>--}}
{{--                            </div>--}}
{{--                            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="tpl_admin/register.html" class="text-primary">Create</a>--}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../tpl_admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../tpl_admin/assets/js/off-canvas.js"></script>
<script src="../tpl_admin/assets/js/hoverable-collapse.js"></script>
<script src="../tpl_admin/assets/js/misc.js"></script>
<!-- endinject -->
</body>
</html>
