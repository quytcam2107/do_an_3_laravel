

function addModalBookRoom(id, nameroom, priceroom) {
    $('#idRoom').val(id);
    $('#name_room').val(nameroom);
    $('#price_room').val(priceroom);
}

function submitAddBookRoom() {
    var roomId = $('#idRoom').val();
    var statusBook = $('#status_book').val();
    var roomName = $('#name_room').val();
    var roomPrice = $('#price_room').val();
    var customerID = $('#id_customer').val();
    var attachmentNumber = $('#attachment_number').val();
    var deposit = $('#deposit').val();
    var dayTo = $('#day_to').val();
    var dayOut = $('#day_out').val();
    var memo = $('#memo').val();
    // var url = '/admin/bookroom/addRoomPass';
    $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            'customerID': customerID,
            'roomId': roomId,
            'attachmentNumber': attachmentNumber,
            'deposit': deposit,
            'dayTo': dayTo,
            'dayOut': dayOut,
            'memo': memo,
            'statusBook': statusBook,
        },
        url: '/admin/bookroom/addRoomPass',
        dataType: 'json',
        success: function (response) {
            console.log(response);
            alert('success');
          location.reload();
        },
        error: function (result) {
            alert('error');

        }
    })

}
