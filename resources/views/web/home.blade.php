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
    </style>
  </head>
  <body>


    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{ route('web.home') }}">SunQ Hotel</a>
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
    <!-- END header -->

    <div class="hero" style="background-image: url('https://images.wallpaperscraft.com/image/single/burj_al_arab_hotel_dubai_uae_sky_sea_59061_3840x2160.jpg');"></div>
    <div class="block-chooseroom">
        <div class="container-fluid">
            <div class="row title-block-rooms">
                <div class="col-lg-12">
                    <h1 class="title-block text-center">Phòng phù hợp nhất cho bạn</h1>
                    <div class="line-home-rooms"></div>
                </div>
            </div>
            <div class="row mt-2">
                @foreach ($data as $key)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <figure class="item-rooms">
                            <a href="{{ 'room/'.$key->ma_phong }}" title="Phòng VIP hướng biển" class="">
                                <img src="http://phuongbacluxuryhotel.com/uploads/rooms/OSV/PBL_VIPBanner.png" alt="Phòng VIP hướng biển" class="img-rounded img-responsive">
                                <figcaption class="title-rooms">
                                    <h3>{{ $key->mo_ta }}</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                @endforeach
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
    © 2021 Copyright:
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
