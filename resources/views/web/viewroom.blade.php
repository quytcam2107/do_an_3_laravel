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
        .title-list-rooms{
            color: white;
        }
        .block-list-rooms-detail{
            background: #D7D7D7;
            padding-top: 40px;
            color: #000;
        }
        .content p{
            color: black !important;
        }
    </style>
  </head>
  <body>
    <div style="width: 100%;height: 15%;">
      <header role="banner" style="background: white;">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="{{ route('web.home') }}">SunQ Hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Trang ch???</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">V??? ch??ng t??i</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">D???ch v???</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="#">Xe ????a ????n s??n bay</a>
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
                  <a class="nav-link" href="#">Li??n h??? ch??ng t??i</a>
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
            <h1 class="title-list-rooms">{{ $data['mo_ta'] }}</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="block-list-rooms-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="thumbnail-room">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ $data['anh_phong'] }}" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/92/2019/11/20071929/0919-AJS-NOI-Hotel-des-Arts-SGN-1091-Web-1500x690.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="https://pix8.agoda.net/hotelImages/11017/-1/3e4ba663f8a6c48698079b42b3a1926c.jpg?ca=9&ce=1&s=1024x768" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                    <div class="room-detail">
                        <div class="room-price">
                            <h3 class="name-room">{{ $data['mo_ta'] }}</h3>
                                                    <h3><strong class="price">Li??n h???</strong></h3>
                                                </div>
                        <div class="room-info">
                            <h3 class="title">Th??ng tin ph??ng</h3>
                            <div class="room-services-list">
                                     <div class="room-services-item" data-toggle="tooltip" title="" data-original-title="T???i ??a s??? ng?????i">
                                    <i class="mdi mdi-layers"></i>
                                    <span>T???ng : {{ $data['tang'] }}</span>
                                </div>
                                <div class="room-services-item" data-toggle="tooltip" title="" data-original-title="Di???n t??ch ph??ng">

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        {{-- <div class="room-services">
                            <h3 class="title">D???ch v??? ph??ng</h3>
                            <div class="room-services-list">
                                                        <div class="clearfix"></div>
                            </div>
                        </div> --}}
                        <div class="room-description">
                            <h3 class="title">M?? t??? ph??ng</h3>
                            <div class="content">
                                <p><em><strong>Premium Double Ocean View - Ph??ng&nbsp;Cao c???p Gi?????ng ????i H?????ng Bi???n</strong></em> c???a kh??ch s???n <strong>Ph????ng B???c Luxury</strong>&nbsp;r???ng 23m2 v???i t???m nh??n si??u r???ng Panorama ra b??i bi???n Nh???t L??? ki???u di???m,&nbsp;s??? mang ?????n cho Qu?? kh??ch nh???ng tr???i nghi???m tr???n v???n nh???t v??? mi???n duy??n h???i mi???n Trung Qu???ng B??nh v???i&nbsp;bi???n xanh v??&nbsp;c??t tr???ng r???c r???.&nbsp;&nbsp;T???t c??? c??c ph??ng Premium Double - ph??ng Cao c???p gi?????ng ????i ?????u c?? k???t c???u&nbsp;ti???n nghi&nbsp;v???i gh??? sofa tho???i m??i c??ng kh??ng gian t???i ??a t???m nh??n v???i h?????ng bi???n v?? h?????ng n??i, h?????ng th??nh ph???. &nbsp;M???i ph??ng Premium&nbsp;?????u ???????c trang b??? TV m??n h??nh ph???ng 43???, k???t n???i Internet Wifi mi???n ph?? t???i ph??ng v?? nh?? t???m ?????ng r???ng r??i.&nbsp;</p>
                                <p>Ph??ng Premium Double Ocean View, hay c??n g???i l?? Ph??ng Cao c???p Gi?????ng ????i h?????ng bi???n c???a kh??ch s???n&nbsp;<strong>Ph????ng B???c Luxury&nbsp;</strong>l?? m???t trong nh???ng l???a ch???n tuy???t v???i nh???t, l??ng m???n nh??ng kh??ng k??m ph???n ti???n nghi nh???t cho k?? ngh??? t???i Qu???ng B??nh c???a qu?? kh??ch th??m ph???n ho??n h???o.&nbsp;</p>

                                <p>&nbsp;</p>

                                <ul>
                                    <li>Gi?????ng King 1.8m&nbsp;trang b??? ?????m tho???i m??i</li>
                                    <li>Hai h?????ng c???a s??? l???n cung&nbsp;c???p ??nh s??ng t??? nhi??n v?? view r???ng r??i&nbsp;cho ph??ng ngh???</li>
                                    <li>Gh??? sofa trong ph??ng c??ng b??n l??m vi???c, g????ng trang ??i???m</li>
                                    <li>??? c???m ??i???n 220V (b??? chuy???n ?????i ??i???n c?? s???n theo y??u c???u)</li>
                                    <li>Gi?????ng ph??? (ph??? thu chi ph?? qua ????m - tu??? theo t???ng ngh???)</li>
                                    <li>??i???n tho???i b??n k???t n???i n???i b???&nbsp;</li>
                                    <li>Ph??ng t???m v???i kh??ng gian r???ng r??i hi???n ?????i</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="panel panel-custom">
                        <div class="panel panel-custom" id="myAffix">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Ch???n ng??y nh???n v?? tr??? ph??ng</h3>
                            </div>
                            <div class="panel-body">
                                <form action="/booking/" method="POST" class="formSearch" id="formSearch">
                                    @csrf
                                    <div id="dateBooking" class="input-daterange">
                                    <div class="form-group">
                                        <label for="datepickerStart">Ng??y nh???n ph??ng</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control input-lg" id="datepickerStart" name="checkin" autocomplete="off" placeholder="Ch???n ng??y" required="">
                                            <span class="input-group-addon input-group-addon-custom"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepickerEnd">Ng??y tr??? ph??ng</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control input-lg" id="datepickerEnd" name="checkout" autocomplete="off" placeholder="Ch???n ng??y" required="">
                                            <span class="input-group-addon input-group-addon-custom"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">S??? ng?????i</label>
                                        <div class="input-group">
                                            <select class="form-control input-lg" id="qty" name="people" required="">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                    <option>9</option>
                                                                                    <option>10</option>
                                                                                </select>
                                            <span class="input-group-addon input-group-addon-custom"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control input-lg d-none" value="{{ $data['ten_phong'] }}" id="datepickerEnd" name="nameRoom" autocomplete="off" >
                                        <button type="submit" style="background: #0d6efd!important" name="selectRoom" id="orderRoom" value="{{ $data['ma_phong'] }}" class="btn btn-phuongbac btn-lg btn-block text-uppercase">?????t ph??ng</button>
                                    <div class="form-group" id="result"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
   </div>
   <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      ?? 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
    <script src="../client/js/jquery-3.3.1.min.js"></script>
    <script src="../client/js/popper.min.js"></script>
    <script src="../client/js/bootstrap.min.js"></script>
    <script src="../client/js/jquery.sticky.js"></script>
    <script src="../client/js/main.js"></script>
  </body>
</html>
