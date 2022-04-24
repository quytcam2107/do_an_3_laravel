<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../client/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../client/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../client/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../client/css/style.css">

    <title>SunQ Hotel</title>
    <style>
        .line-home-rooms {
            width: 15%;
            border: 0;
            margin: auto;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }
        .title-block{
            margin-top: 25px;
            margin-bottom: 15px;
            font-weight: 800;
        }
        .item-rooms{
            margin-bottom: 30px;
            display: block;
            overflow: hidden;
            border-radius: 6px;
        }
        .item-rooms img{
            border-radius: 6px;
            transform: scale(1);
            transition: all 0.25s linear;
        }
        .title-rooms{
            color: #ffffff;
            display: block;
            float: left;
            position: absolute;
            bottom: 30px;
            left: 25px;
            line-height: 100%;
            margin-right: 10px;
            font-size: 16px;
            font-weight: 100;
        }
        .item-rooms a:hover img{
        border-radius: 6px;
        transform: scale(1.05);
        }
        .container a{
            color: black !important;
        }
        header .navbar .nav-link.active{
            color: black !important;
        }
        header .navbar .nav-link{
            color: black !important;
        }
        .block-title-list-rooms{
          padding: 80px 0px 80px 0px;
          background-image: transparent;
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
        }
        .block-list-rooms-detail{
            background: #D7D7D7;
            padding-top: 40px;
            color: #000;
        }
    </style>
  </head>
  <body>
    <div style="width: 100%;height: 15%;">
      <header role="banner" style="background: white;">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="index.html">SunQ Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Về chúng tôi</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch vụ</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="#">Xe đưa đón sân bay</a>
                    {{-- <a class="dropdown-item" href="#">Drink &amp; Beverages</a>
                    <a class="dropdown-item" href="#">Wedding &amp; Birthday</a> --}}
                  </div>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">News</a>
                </li> --}}
              </ul>

              <ul class="navbar-nav ml-auto">
                <li class="nav-item cta-btn">
                  <a class="nav-link" href="#">Liên hệ chúng tôi</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
      </header>
    </div>
   <div class="block-chooseroom">
    <div class="block-title-list-rooms" style="background-image:url('http://phuongbacluxuryhotel.com/uploads/rooms/PDO/Banner2.png')">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="title-list-rooms">Phòng Cao Cấp Giường Đôi Hướng Biển</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="block-list-rooms-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="thumbnail-room">sdadas</div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="panel panel-custom"></div>
                </div>
            </div>
        </div>
    </div>
   </div>
    <script src="../client/js/jquery-3.3.1.min.js"></script>
    <script src="../client/js/popper.min.js"></script>
    <script src="../client/js/bootstrap.min.js"></script>
    <script src="../client/js/jquery.sticky.js"></script>
    <script src="../client/js/main.js"></script>
  </body>
</html>
