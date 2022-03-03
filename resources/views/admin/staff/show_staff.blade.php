@extends('layouts.app')
@section('title',$title)

@section('css')
    <style>

        .col-md-7{
            width: 1100px;
        }
        .col-md-5{
            width: 500px;

        }
        .card-body{
            box-shadow: 10px 5px 5px #cdcdcb;
        }
    </style>
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nhân viên</h4>
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
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4">
                        <ul>
                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))"></span>Tổng số nhân viên :<span class="float-right">{{count($accounts)}}</span>
                            </li>
{{--                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(6, 185, 157, 1), rgba(132, 217, 210, 1))"></span>Direct Click<span class="float-right">30%</span></li>--}}
{{--                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(255, 191, 150, 1), rgba(254, 112, 150, 1))"></span>Bookmarks Click<span class="float-right">40%</span></li>--}}
                        </ul>
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
