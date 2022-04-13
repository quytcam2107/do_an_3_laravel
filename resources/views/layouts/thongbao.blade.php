@if (Session::has('error'))
<div class="alert alert-danger" role="alert">
  <strong> {{Session::get('error')}}</strong>
</div>  
@elseif (Session::has('success'))
        <div class="alert alert-success" role="alert">
            <strong>{{Session::get('success')}}</strong>
        </div>

@endif
@if ($errors->any())
<div class="alert alert-warning" role="alert">
   @foreach ($errors->all() as $error)
       <li>{{$error}}</li>
   @endforeach
</div>
@endif