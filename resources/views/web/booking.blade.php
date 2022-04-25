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
        .block-detail-post{
            background: #d7d7d7;
        }
        .btn-phuongbac{
            color: #fff !important;
            background-color: #3f3f3f;
            border-color: #3f3f3f;
        }
        .btn-phuongbac:focus{
            background-color: #3f3f3f;
            border-color: #3f3f3f;
        }
        .btn-custom{
            padding: 11px;
        }
        .bold{
          font-weight: bold;
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
  <div class="block-detail-post pt-5">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
      <h2 class="text-center">Đặt phòng</h2>
        @csrf
    <div class="container">
        <div class="row bg-light text-dark mt-2">
            <div class="d-flex flex-wrap">
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i> <span class="bold">Đêm</span></label>
                        <p><strong>
                            {{ \Carbon\Carbon::parse($data['checkout'])->format('d') - \Carbon\Carbon::parse($data['checkin'])->format('d')}}
                        </strong></p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i> <span class="bold">Số người</span></label>
                        <p><strong>{{ $data['people'] }}</strong></p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i><span class="bold">Ngày nhận phòng</span></label>
                        <p><strong>{{ $data['checkin'] }}</strong></p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i><span class="bold">Ngày trả phòng</span></label>
                        <p><strong>{{ $data['checkin'] }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light text-dark mt-3">
            <div class="d-flex flex-wrap">
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i><span class="bold">Tên phòng</span></label>
                        <p><strong>
                          {{ $data['nameRoom'] }}
                        </strong></p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i><span class="bold">Gía phòng</span></label>
                        <p><strong>{{ $data['price'] ?? 'Liên hệ' }}</strong></p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i><span class="bold">Tổng thanh toán</span> </label>
                        <p><strong>{{ $data['total'] ?? 'Liên hệ' }}</strong></p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-group">
                        <label><i class="fa fa-calendar" aria-hidden="true"></i></label>

                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light text-dark mt-3">
            <form method="post" action="{{ route('web.bookings') }}" style="width: 1000px;">
                @csrf
                <div class="container">
				<div class="col-auto">
					<h3 class="title">Thông tin khách hàng</h3>
					<div class="form-group">
						<label>Họ và tên (*)</label>
						<input type="text" class="form-control" name="fullname" id="nameCustomer" maxlength="100" required="">
					</div>
					<div class="form-group">
						<label>Điện thoại (*)</label>
						<input type="phone" class="form-control" name="phone" id="phone" maxlength="12" required="">
					</div>
					<div class="form-group">
						<label>Email (*)</label>
						<input type="email" class="form-control" name="email" id="email" maxlength="100" required="">
					</div>
                    <div class="form-group">
						<label>Giới tính (*)</label>
						<select name="gender" class="form-control">
                            <option value="1">Nam</option>
                            <option value="0">Nữ</option>
                        </select>
					</div>
                    <div class="form-group">
						<label>Số CMND (*)</label>
						<input type="text" class="form-control" name="passport" id="nameCustomer" maxlength="100" required="">
					</div>
                    <div class="form-group">
						<label>Địa chỉ (*)</label>
						<input type="text" class="form-control" name="address" id="nameCustomer" maxlength="100" required="">
					</div>
                    <div class="form-group">
						<label>Quốc tịch (*)</label>
						<input type="text" class="form-control" name="national" id="nameCustomer" maxlength="100" required="">
					</div>
					<div class="form-group">
						<label for="specialrequired">Yêu cầu</label>
						<textarea class="form-control" name="specialrequired" id="specialrequired" maxlength="300" rows="3"></textarea>
					</div>
					<hr>
                    <input type="text" name="idRoom" class="d-none" id="idRoom" value="{{ $data['selectRoom'] }}">
                    <input type="text" name="checkIn" class="d-none" id="checkIn" value="{{ $data['checkin'] }}">
                    <input type="text" name="checkOut" class="d-none" id="checkOut" value="{{ $data['checkout'] }}">
                    <input type="text" name="people" class="d-none" id="people" value="{{ $data['people'] }}">
			</div>
        </div>

        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
        <div class="buttonPayment mt-4 mb-4">
                <button style="margin-left: 680px" type="submit"  class="btn btn-phuongbac btn-lg btn-block text-uppercase col-3">xác nhận đặt phòng</button>
        </div>
     </div>
    </div>
</form>
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
    {{-- <script>
        $(document).ready(function () {
            var roomId = $("#nameRoom").val();
            var checkIn = $("#checkIn").val();
            var checkOut = $("#checkOut").val();
            var people = $("#people").val();
            var fullName = $("#nameCustomer").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var specialrequired = $("#specialrequired").val();
            $(".btn-phuongbac").on("click", function () {
                console.log(fullName);
            });
        });
    </script> --}}
  </body>
</html>
