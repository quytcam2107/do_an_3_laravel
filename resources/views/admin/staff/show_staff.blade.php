@extends('layouts.app')
@section('title',$title)

@section('css')
    <style>

    </style>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Tickets</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>ID</th>
                                <th>Tên nhân viên</th>
                                <th>Giới tính</th>
                            </thead>
                            <tbody>
                               @foreach($accounts as $account)
                                    <tr>
                                        <td>{{$account->ma_tai_khoan ?? '-'}}</td>
                                        <td>{{$account->taikhoan->ten_nhan_vien ?? '-'}}</td>
                                        <td>{{$account->taikhoan->gioitinh == 1 ? 'Nam' : 'Nữ' }}</td>
                                    </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } )
</script>
