{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQuickView">Launch--}}
{{--    modal</button>--}}
<!-- Modal: modalQuickView -->
<div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <input type="text" class="d-none" id="idRoom">
                <div class="row">
                    <div class="col-lg-5">
                        <!--Carousel Wrapper-->
                        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                             data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                         src="https://noithatmyhouse.com/wp-content/uploads/2019/05/tieu-chuan-thiet-ke-khach-san-5-sao_16.jpg"
                                         alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                         src="https://viettravelo.com/wp-content/uploads/2018/05/khach-san-indochine.jpg"
                                         alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).webp"
                                         alt="Third slide">
                                </div>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                                    <img
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).webp"
                                        width="60">
                                </li>
                                <li data-target="#carousel-thumb" data-slide-to="1">
                                    <img
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(24).webp"
                                        width="60">
                                </li>
                                <li data-target="#carousel-thumb" data-slide-to="2">
                                    <img
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).webp"
                                        width="60">
                                </li>
                            </ol>
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                    <div class="col-lg-7">
                        <h2 class="h2-responsive product-name">
                            <strong><span>Phòng</span></strong>
                            <input style="width: 20%;" type="text" class="" id="name_room" disabled><br>
                            <span>Giá Phòng</span>
                            <input style="width: 40%;" type="text" class="" id="price_room" disabled>VND
                        </h2>
                        <h4 class="h4-responsive">
                            {{--              <span class="green-text">--}}
                            {{--                    Giá phòng :<input id="price_room">--}}
                            {{--              </span>--}}
                            <span class="grey-text">
                             </span>
                        </h4>

                        <!--Accordion wrapper-->
                        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                            <!-- Accordion card -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingOne1">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                                       aria-expanded="true"
                                       aria-controls="collapseOne1">
                                        <h5 class="mb-0">
                                            Thông tin đặt phòng<i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseOne1" class="collapse show" role="tabpanel"
                                     aria-labelledby="headingOne1"
                                     data-parent="#accordionEx">
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Khách hàng :</label>
                                        <div class="col-sm-9">
                                            <select name="id_customer" id="id_customer" class="form-control">
                                                @foreach($customers as $customer)
                                                    <option value="{{$customer->ma_khach_hang}}">
                                                        {{$customer->ho_ten_khach}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Số người đi kèm :</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="attachment_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Số tiền đặt cọc :</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="deposit" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">  Ngày nhận phòng :</label>
                                            <div class="col-sm-9">
                                                <input type="date" id="day_to" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Ngày đi :</label>
                                            <div class="col-sm-9">
                                                <input type="date" id="day_out" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Trạng thái</label>
                                            <div class="col-sm-9">
                                                <select name="status_book" id="status_book" class="form-control">
                                                    <option value="1">Nhận phòng luôn</option>
                                                    <option value="0">Chờ nhận phòng</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">  Ghi Chú :</label>
                                            <div class="col-sm-9">
                                                <textarea id="memo"  cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                            <div class="text-center">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" onclick="submitAddBookRoom()">Đặt phòng
                                    <i class="fas fa-cart-plus ml-2" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
