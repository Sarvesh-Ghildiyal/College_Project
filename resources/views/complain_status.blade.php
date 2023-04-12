@extends('welcome')
@section('content')
<!-- Complain Status Form -->
<div class="main_body row">

    <!-- Complain status -->
    <h3 class="col-12">Complain Status</h3>
    
    <!-- Proper form -->
    <form class="col-12">
       <div class="row complain_status">
           
            <div class="col-md-6 mt-3">
                <label for="complain_id">Complain_ID:</label>
                <input type="text" id="complain_id" name="complain_id" class="form-control" placeholder="eg:CSE">
            </div>
            
            <div class="col-md-6 mt-3">
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

            <div class="col-md-6 mt-4">
                <label for="date_of_complain_submission">Date of Complain Submission:</label>
                <input type="date" id="date_of_complain_submission" name="date_of_complain_submission" class="form-control" placeholder="eg:205">
            </div>

            <div class="col-md-6 mt-4">
                <label for="date_of_completion">Date of Completion:</label>
                <input type="date" id="date_of_completion" name="date_of_completion" class="form-control" placeholder="eg:205">
            </div>

       </div>
       
        <button type="submit" class="btn btn-primary mt-3 d-flex justify-content-center">Submit</button>
      </form>
</div>
@endsection