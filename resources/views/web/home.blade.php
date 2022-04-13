<html lang="vi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="public">
<title>Hotel - Hanoi</title>

<link rel="alternate" type="application/rss+xml" title="" href="https://hoabinhhotel.com/rss.xml">

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&amp;subset=vietnamese" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/templates/default/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/libraries/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/mainmenu/assets/css/jquery.mmenu.all.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/mainmenu/assets/css/megamenu_moblie.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/mainmenu/assets/css/menutop.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/mainmenu/assets/css/megamenu.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/libraries/OwlCarousel2-2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/slideshow/assets/css/home.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/libraries/jquery/jquery.ui/jquery-ui.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/search/assets/css/default.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/rooms_list/assets/css/slideshow.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/discount/assets/css/discount.css">
<link rel="stylesheet" type="text/css" media="screen" href="https://hoabinhhotel.com/blocks/mainmenu/assets/css/bottommenu.css">


</head>

<body class="" style="overflow: visible;">
 
    <!-- END: header -->
    <div class="main row-content" id="main">
        <div class="row-content pos_header">
            <div class="block_slideshow slideshow-home slideshow__slideshow block">
                <div id="owl-slideshow" class="owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-6545px, 0px, 0px); transition: all 0.5s ease 0s; width: 10285px;">
                            <div class="owl-item cloned" style="width: 935px;">
                                <div class="item">

                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 935px;"></div>
                            <div class="owl-item cloned" style="width: 935px;">
                              
                            </div>
                            <div class="owl-item" style="width: 935px;"></div>
                            <div class="owl-item" style="width: 935px;">
                                <div class="item">

                                </div>
                            </div>
                            <div class="owl-item" style="width: 935px;"></div>
                            <div class="owl-item" style="width: 935px;"></div>
                            <div class="owl-item active" style="width: 935px;">
                                <div class="item">
                                    <a href="">
                                        <img class="img-responsive" src="https://hoabinhhotel.com/images/slideshow/2021/03/10/slideshow_large/11_1615351073.jpg" alt="Hoabinhhotel 4">

                                    </a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 935px;">
                                <div class="item">
                                    <a href="">
                                        <img class="img-responsive" src="https://hoabinhhotel.com/images/slideshow/2019/09/25/slideshow_large/185jpg_1569380560.jpg" alt="Hoabinhhotel">

                                    </a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 935px;">
                                <div class="item">

                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 935px;">
                                <div class="item">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search clearfix">
                    <form class="clearfix" action="/store" name="form" id="search_form" method="post">
                        @csrf
                        <div class="col-search col-date">
                            <span class="label-search">Họ Tên</span>
                            <input type="text"  placeholder="Name" name="name" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-date">
                            <span class="label-search">Email</span>
                            <input type="text"  placeholder="Email" name="email" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-date">
                            <span class="label-search">Số điện thoại</span>
                            <input type="text" placeholder="Tel" name="phone" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-date">
                            <span class="label-search">Quốc tịch</span>
                            <input type="text" placeholder="Nationality" name="quoctich" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-date">
                            <span class="label-search">Số CMND/CCCD</span>
                            <input type="text" placeholder="CMND/CCCD" name="number" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-date">
                            <span class="label-search">Ngày đến</span>
                            <input type="date" name="ngayDen" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-date">
                            <span class="label-search">Ngày đi</span>
                            <input type="date" name="ngayDi" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-date">
                            <span class="label-search">Số tiền đặt cọc</span>
                            <input type="text" placeholder="Money" name="tiendatcoc" class="form-control datetime hasDatepicker">
                        </div>
                        <div class="col-search col-select">
                            <span class="label-search">Phòng</span>
                            <select id="room" name="room">
                                <option value="1">1</option>';
                                <option value="2">2</option>';
                                <option value="3">3</option>';
                                <option value="4">4</option>';
                                <option value="5">5</option>';
                                <option value="6">6</option>';
                                <option value="7">7</option>';
                                <option value="8">8</option>';
                                <option value="9">9</option>';
                                <option value="10">10</option>';
                            </select>
                        </div>
                        <div class="col-search col-select">
                            <span class="label-search">Số người</span>
                            <select id="quantity" name="quantity">
                                <option value="1">1</option>';
                                <option value="2">2</option>';
                                <option value="3">3</option>';
                                <option value="4">4</option>';
                                <option value="5">5</option>';
                                <option value="6">6</option>';
                                <option value="7">7</option>';
                                <option value="8">8</option>';
                                <option value="9">9</option>';
                                <option value="10">10</option>';
                            </select>
                        </div>
                        <div class="col-search col-btn">
                            <!-- <input class="btn-primary" type="submit" name="" value="" /> -->
                            <button type="submit" class="btn-primary btn-search-all">Gửi thông tin</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="owl-nav disabled">
                <div class="owl-prev disabled">&nbsp;</div>
                <div class="owl-next disabled">&nbsp;</div>
            </div>
            <div class="owl-dots disabled">
                <div class="owl-dot active"><span></span></div>
            </div>
        </div>
    </div>
    </div>
    </div> <!-- END: .pos-top -->

    </div>
    <!-- END: main -->
    <footer class="row-content" id="footer">
        </div>
        </div>
        <div class="container info-footer" style="margin-bottom: 40px">
            <div id="info-footer" class="col-lg-r col-lg-9 col-md-7 col-sm-12 col-xs-12">
                <a class="logo-footer">
                    <img src="{{asset('./tpl_admin/assets/images/logo-mini.svg')}}">
                </a>
                <div class="info-footer-right">
                    <p>Địa chỉ: Số 17 Tạ Quang Bửu, Hà Nội<br>
                        Tel: 024319865198<br>
                        Email: <a href="mailto:thanhyp2001@gmail.com">thanhyp2001@gmail.com</a> <br>
                        Facebook: <a href="https://www.facebook.com/thanham2001/">Nguyễn Trung Thành</a> <br>
                        Youtube: <a href=""></a>
                    </p>
                </div>
            </div>
        </div>
    </footer><!-- END: footer -->

</body>

</html>