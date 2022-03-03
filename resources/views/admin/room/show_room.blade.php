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
                    <h4 class="card-title">Phòng</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <th>ID</th>
                            <th>Tên Phòng</th>
                            <th>Mô tả</th>
                            <th>Tình trạng</th>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr class="
                                    @if($room->tinh_trang_phong == 0){{'table-danger'}}
                                    @endif
                                    " id="{{$room->ma_phong}}">
                                    <td>{{$room->ma_phong ?? '-'}}</td>
                                    <td>{{$room->ten_phong ?? '-'}}</td>
                                    <td>{{$room->mo_ta ?? '-'}}</td>
                                    @if($room->tinh_trang_phong == 0)
                                        <td ><button type="button" class="btn btn-gradient-danger btn-fw">Phòng đang bảo trì</button></td>
                                    @endif
                                    @if($room->tinh_trang_phong == 1)
                                        <td><button type="button" class="btn btn-gradient-success btn-fw">Có thể sử dụng</button></td>
                                    @endif
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
                            <li><span class="legend-dots" style="background:linear-gradient(to right, rgba(54, 215, 232, 1), rgba(177, 148, 250, 1))"></span>Tổng số phòng đang có :<span class="float-right">{{count($rooms)}}</span>
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

