@extends('layouts.app')
@section('title','Quản lý thuê - trả phòng')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
@section('css')
    <link href="{{ url('css/common/css_common.css') }}" rel="stylesheet">
    <link href="{{ url('css/common/checkout.css') }}" rel="stylesheet">
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-2 stretch-card grid-margin">
            @foreach ($data['room_using'] as $key)
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">

                </div>

            </div>
            @endforeach

        </div>

        @include('tpl.admin.rentandcheckout.tab_rentandcheckout')
    </div>


@endsection
@section('js')
    <script type="text/javascript" src="{{ url('js/admin/room.js') }}"></script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection


