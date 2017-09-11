@extends('layout');


@section('content')

  <h2>Login</h2>

  @if(Session::has('success'))
  <div class="row">
    <div class="col md-12">
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
    </div>
  </div>
  @endif


  <form action="login_check" method="post">

   <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
      @if($errors->has('email')) <p>{{$errors->first('email')}} </p>@endif
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
        @if($errors->has('password')) <p>{{$errors->first('password')}} </p>@endif
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

@endsection
