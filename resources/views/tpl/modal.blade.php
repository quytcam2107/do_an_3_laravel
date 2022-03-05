
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <button class="btn  btn-primary  mt-3" id="modal_view_left" data-toggle="modal"  data-target="#get_quote_modal">Thêm Phòng</button>
        </div>
    </div>
</div>

<div class="modal modal_outer left_modal fade" id="get_quote_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
    <div class="modal-dialog" role="document">
        <form method="get"  id="get_quote_frm" action="{{route('admin.room.insert')}}">
            <div class="modal-content ">
                <!-- <input type="hidden" name="email_e" value="admin@filmscafe.in"> -->
                <div class="modal-header">
                    <h2 class="modal-title">Thêm phòng</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body get_quote_view_modal_body">

                    <div class="form-row">

                        <div class="form-group col-sm-6">
                            <label for="ten_phong">Tên phòng <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required="" id="ten_phong" name="ten_phong">
                        </div>
                        <div class="form-group  col-sm-6">
                            <label for="exampleFormControlSelect2">Loại phòng</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="ma_loai_phong">
                                <option>-- Loại phòng --</option>
                                @foreach(config('constants.loai_phong') as $key =>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="exampleFormControlSelect2">Tầng</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="tang">
                                @foreach(config('constants.tang') as $key =>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="message">Mô tả</label>
                            <textarea class="form-control" id="message" name="mo_ta" rows="4"></textarea>
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="gia_phong">Giá phòng :(VNĐ/NgàyĐêm) <span class="text-danger">*</span></label>
                            <input type="number" required="" class="form-control" id="gia_phong" name="gia_phong">
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="anh_phong">Ảnh<span class="text-danger">*</span></label>
                            <input type="file"  class="form-control" id="anh" name="anh_phong">
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="exampleFormControlSelect2">Tình trạng phòng</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="tinh_trang_phong"
                            >
                                @foreach(config('constants.tinh_trang_phong') as $key =>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Hủy</button>
                    <button type="submit" class="btn btn-primary" id="submit_btn">Thêm</button>
                </div>
            </div><!-- //modal-content -->
        </form>
    </div><!-- modal-dialog -->

</div><!-- modal -->
<!-- //left modal -->
<!-- right modal -->
<div class="modal modal_outer right_modal fade" id="editRoomModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" >
    <div class="modal-dialog" role="document">
        <form id="edit_rom_form" action="">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="modal-content ">
                <!-- <input type="hidden" name="email_e" value="admin@filmscafe.in"> -->
                <div class="modal-header">
                    <h2 class="modal-title">Sửa</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body get_quote_view_modal_body">

                    <div class="form-row">

                        <div class="form-group col-sm-6">
                            <label for="ten_phong">Tên phòng <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required="" id="e_ten_phong" name="ten_phong">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="ma_loai_phong">Mã loại phòng <span class="text-danger">*</span></label>
                            <input type="number" required="" class="form-control" id="e_ma_loai_phong" name="ma_loai_phong">
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="tang">Tầng<span class="text-danger">*</span></label>
                            <input type="number" required="" class="form-control" id="e_tang" name="tang">
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="mo_ta">Mô tả</label>
                            <textarea class="form-control" id="e_mo_ta" name="mo_ta" rows="4"></textarea>
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="gia_phong">Giá phòng<span class="text-danger">*</span></label>
                            <input type="number" required="" class="form-control" id="e_gia_phong" name="gia_phong">
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="anh_phong">Ảnh<span class="text-danger">*</span></label>
                            <input type="file"  class="form-control" id="e_anh" name="anh_phong">
                        </div>
                        <div class="form-group  col-sm-12">
                            <label for="tinh_trang_phong">Tình trạng phòng</label>
                            <input type="text" class="form-control" id="e_tinh_trang_phong" name="tinh_trang_phong"/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light mr-auto" data-dismiss="modal"><i class="fas fa-window-close mr-2"></i> Hủy</button>
                    <button type="submit" class="btn btn-primary" id="submit_btn">Thêm</button>
                </div>

            </div><!-- //modal-content -->
        </form>
    </div><!-- modal-dialog -->
</div><!-- modal -->
