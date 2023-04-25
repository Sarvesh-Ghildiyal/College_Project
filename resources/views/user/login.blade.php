
@extends('welcome')

@section('content')

<!-- Login Form -->
<div class="main_body row">

    <h3 class="col-12">User Login</h3>
    
    <form class="col-12" action="/user/login" method="post">

      @if($errors)
      @foreach($errors->all() as $error)
        <p class="text-danger">{{$error}}</p>
      @endforeach
      @endif
      
      {{-- @if (Session::has('error'))
      <p class="text-danger">{{Session('error')}}</p>
      @endif --}}

        @csrf
        <div class="col-md-4">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="col-md-4">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
</div>

@endsection