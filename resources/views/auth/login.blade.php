<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
</head>
<body>
<form action="" method="post">
    @if(Session::has('error'))
        <span>{{Session::get('error')}}</span>
    @endif
    @if(Session::has('fail_password'))
        <span>{{Session::get('fail_password')}}</span>
    @endif
    @if(Session::has('fail'))
        <span>{{Session::get('fail')}}</span>
    @endif
        @if(Session::has('fail_username'))
            <span>{{Session::get('fail_username')}}</span>
        @endif
        @if(Session::has('fail_status'))
            <span>{{Session::get('fail')}}</span>
        @endif
    <br>
    @csrf
    <input type="text" placeholder="Tên đăng nhập ..." name="username" value="{{old('username')}}"><br>
    <span style="color: red;">@error('username'){{$message}}@enderror</span><br>
    <input type="password" placeholder="Mật Khẩu ..." name="password" value=""><br>
    <span style="color: red;">@error('password'){{$message}}@enderror</span><br>
    <button type="submit">Đăng Nhập</button>
</form>
</body>
</html>
