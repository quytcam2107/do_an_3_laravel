@extends('layouts.app')
@section('title','Hóa đơn')

@section('css')
@endsection

@push('css-datatable')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css"/>
@endpush

@section('main-content')
    <div class="card">
        <div class="card-body">
        <table id="bill-table" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Mã Hóa Đơn</th>
                    <th>Tên Phòng</th>
                    <th>Họ tên </th>
                    <th>Tạo lúc </th>
                    <th>Người tạo </th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection

@push('js-datatable')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js"></script>

<script>
    $(function() {
        $('#bill-table').DataTable({

            processing: true,
            serverSide: true,
            language: {
                "processing": "Đang tải .........",
                "paginate": {
                    "first": "Đầu tiên",
                    "last": "Cuối cùng",
                    "next": "Sau",
                    "previous": "Trước"
                },
                "search": "Tìm kiếm:",
                "zeroRecords": "Không tìm thấy kết quả",
                "aria": {
                    "sortAscending": ": Sắp xếp thứ tự tăng dần",
                    "sortDescending": ": Sắp xếp thứ tự giảm dần"
                },
                "lengthMenu":     "Hiển thị _MENU_ bản ghi",
                "infoEmpty":      "Hiển thị 0 trên 0 của 0 bản ghi",
                "info":           "Hiển thị _START_ to _END_ of _TOTAL_ Bản ghi",
            },
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Tất cả "]],
            ajax: '{!! route('api.getBillApi') !!}',
            columns: [
                { data: 'ma_hoa_don', name: 'ma_hoa_don' },
                { data: 'ma_phieu_dat_phong', name: 'ma_phieu_dat_phong' },
                { data: 'ten_phong', name: 'ten_phong' },
                { data: 'ho_ten_khach', name: 'ho_ten_khach' },
                { data: 'created_at', name: 'created_at' },
                { data: 'ten_nhan_vien', name: 'ten_nhan_vien' },
                { data: 'action', name: 'action' },
            ],
            "columnDefs":
                [
                    {
                        "targets": 0,
                        "title": "STT"
                    },
                    {
                        "targets": 1,
                        "render": function ( data, type, row, meta ) {
                        return '<a href="bill/getBillById/'+data+'">#'+data+'</a>';
                        }
                    },
                    {
                        "targets": 2,
                    },
                    {
                        "targets": 3,
                    },
                    {
                        "targets": 4,
                    },
                    {
                        "targets": 5,
                    }

                ]
        });
    });
    </script>

@endpush

