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
<div class="card">
    <div class="card-body">
    <canvas id="myChart" height="100px"></canvas>
</div>
</div>
@endsection
@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        $.ajax({
            type: "get",
            url: "/api/chart",

            dataType: "json",
            success: function (response) {
                // console.log(response.lable);
                var obj = response.lable;
                var obj2 = response.billMoneyMonth;
                var result = Object.entries(obj).reduce((ini,[k,v])=>(ini[k]=v,ini),[]);
                console.log(response.billMoneyMonth.month4);
                const data = {
                labels: result,
                datasets: [{
                    type: 'bar',
                    label: 'Thống kê theo tháng',
                    data: [0,
                    response.billMoneyMonth.month1,
                    response.billMoneyMonth.month2,
                    response.billMoneyMonth.month3,
                    response.billMoneyMonth.month4,
                    response.billMoneyMonth.month5,
                    response.billMoneyMonth.month6,
                    response.billMoneyMonth.month7,
                    response.billMoneyMonth.month8,
                    response.billMoneyMonth.month9,
                    response.billMoneyMonth.month10,
                    response.billMoneyMonth.month11,
                    response.billMoneyMonth.month12,
                    ],
                    borderColor: 'rgb(255, 99, 132)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)'
                }]
                };

                const config = {
                type: 'scatter',
                data: data,
                options: {
                    scales: {
                    y: {
                        beginAtZero: true
                    }
                    }
                }
                };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );

                    }
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
                   $('.totalMonth').html(parseFloat(response.totalMonthCurrent.total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString()+' VND');
                $('.precent').html(parseFloat(response.totalMonthCurrent.percent).toFixed(2)+"%");
                   $('.monthLast').html(response.totalLastCurrent.month);
                $('.totalLastMonth').html(parseFloat(response.totalLastCurrent.total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString()+' VND');
                    console.log(response);
               }
           });
        });
  </script>
@endsection
