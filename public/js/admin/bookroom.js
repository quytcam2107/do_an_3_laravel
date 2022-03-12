// $(document).ready(function () {
//     $(document).on('click','#btn_book_room',function (e){
//        console.log('okela');
//     });
// });
function addModalBookRoom(id,nameroom) {
    $('#idRoom').val(id);
    $('#name_room').val(nameroom);
}
function submitAddBookRoom() {
    var roomId = $('#idRoom').val();
    var roomName = $('#name_room').val();
    console.log(roomName);
}
