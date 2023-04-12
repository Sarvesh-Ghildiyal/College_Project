@extends('welcome')

@section('content')

<!-- Login Form -->
<div class="main_body row">

    <h3 class="col-12">Login</h3>
    
    <form class="col-12" action="/complain_form" method="post">

        @csrf
        <div class="col-md-4">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="col-md-4">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary mt-2 d-flex justify-content-center">Submit</button>
      </form>
</div>

@endsection