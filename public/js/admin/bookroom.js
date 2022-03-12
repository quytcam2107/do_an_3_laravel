// $(document).ready(function () {
//     $(document).on('click','#btn_book_room',function (e){
//        console.log('okela');
//     });
// });
function addModalBookRoom(id) {
    $('#idRoom').val(id);
}
function submitAddBookRoom() {
    var roomId = $('#idRoom').val();
    console.log(roomId);
}
