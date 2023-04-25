@extends('user.usercheck')
@extends('user.welcome')


@section('content')
 <!-- Login Form -->
 <div class="main_body row">

    <!-- Login Heading -->
    <h3 class="col-12">Complain Form</h3>
    
    <!-- Proper form -->
    <form class="col-12" method="Post">

        @csrf
       <div class="row complain_form">
            <div class="col-md-6 mt-2">
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" class="form-control" placeholder="eg:CSE">
            </div>
            
            <div class="col-md-6 mt-2">
                <label for="room_number">Room Number:</label>
                <input type="text" id="room_number" name="room_number" class="form-control" placeholder="eg:205">
            </div>

            <div class="col-md-6 mt-4">
                <label for="reported_by">Reported By:</label>
                <input type="text" id="reported_by" name="reported_by" class="form-control" placeholder="eg:Aleva">
            </div>
            
            <div class="col-md-6 mt-4">
                <label for="requested_by">Requested By:</label>
                <input type="text" id="requested_by" name="requested_by" class="form-control" placeholder="eg:Ganel">
            </div>

            <div class="col-md-12 mt-4">
                <label for="problem" class="form-label">Problem:</label>
                <textarea name="problem" id="problem" class="form-control" rows="3"></textarea>
            </div>
       </div>
       
        <button type="submit" class="btn btn-primary mt-2 d-flex justify-content-center">Submit</button>
      </form>
</div>

@endsection