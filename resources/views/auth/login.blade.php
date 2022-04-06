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
    <style>
        img{
            display: block; 
			margin-left: auto; 
			margin-right: auto;
        }
    </style>
    <!-- plugins:css -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../tpl_admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../tpl_admin/assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
<body>
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    window.onload = (event) =>(
        var myAlert = document.querySelector('.toast');
        var bsAlert = new bootstrap.Toast(myAlert);
        bsAlert.show();
    )
</script>
</body>
</html>
