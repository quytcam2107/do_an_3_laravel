@extends('layouts.app')
@section('title','Thống kê')
@section('css')

@endsection
@section('main-content')
<div class="row">
<div class="col-md-6 stretch-card grid-margin">
    <div class="card bg-gradient-info card-img-holder text-white">
      <div class="card-body">
        <h4 class="font-weight-normal mb-3">Doanh thu tháng này ( Tháng<span class="mothCurrent"> 4 </span> Năm 2022)<i class="mdi mdi-chart-line mdi-24px float-right"></i>
        </h4>
        <h2 class="mb-5 totalMonth"></h2>
        <h6 class="card-text">Tăng <span class="precent"></span> so với tháng trước</h6>
      </div>
    </div>
  </div>
  <div class="col-md-6 stretch-card grid-margin">
    <div class="card bg-gradient-danger card-img-holder text-white">
      <div class="card-body">
        <h4 class="font-weight-normal mb-3">Doanh thu tháng trước (Tháng<span class="monthLast"></span> Năm 2022)<i class="mdi mdi-chart-line mdi-24px float-right"></i>
        </h4>
        <h2 class="mb-5 totalLastMonth"></h2>
        {{-- <h6 class="card-text">Increased by 60%</h6> --}}
      </div>
    </div>
  </div>
</div>
<div>
    <canvas id="myChart"></canvas>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const mixedChart = new Chart(ctx, {
    data: {
        datasets: [{
            type: 'bar',
            label: 'Bar Dataset',
            data: [10, 20, 30, 40]
        }, {
            type: 'line',
            label: 'Line Dataset',
            data: [50, 50, 50, 50],
        }],
        labels: ['January', 'February', 'March', 'April']
    },
    options: options
});
</script>
  <script>
       $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
        $(document).ready(function () {
           $.ajax({
               type: "get",
               url: "{{ route('api.getDash') }}",
               dataType: "json",
               success: function (response) {
                   $('.totalMonth').html(response.totalMonthCurrent.total +' VND');
                   $('.precent').html(response.totalMonthCurrent.percent + '%');
                   $('.monthLast').html(response.totalLastCurrent.month);
                   $('.totalLastMonth').html(response.totalLastCurrent.total +' VND');
                    console.log(response);
               }
           });
        });
  </script>
@endsection
