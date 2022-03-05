$(document).ready(function (){
$(document).on('click', '.btn_edit', function (e) {
    $('#editRoomModal').modal('show');
    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
       return $(this).text();
    }).get();

    console.log(data);
    $('#e_ten_phong').val(data[1]);
    $('#e_ma_loai_phong').val(data[2]);
    $('#e_tang').val(data[3]);
    $('#e_mo_ta').val(data[4]);
    $('#e_gia_phong').val(data[5]);

    $('#e_tinh_trang_phong').val(data[7]);
});
});
