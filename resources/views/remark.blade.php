@extends('welcome')
@section('content')
<!-- Complain Status Form -->
<div class="main_body row">

    <!-- Complain status -->
    <h3 class="col-12">Remark Form</h3>
    
    <!-- Proper form -->
    <form class="col-12" >

       <div class="row complain_status">
           
            <div class="col-md-6 mt-3">
                <label for="complain_id">Complain_ID:</label>
                <input type="text" id="complain_id" name="complain_id" class="form-control" placeholder="eg:CSE">
            </div>
           
            <div class="col-md-6 mt-md-3">
                <label for="requested_by">Requested By:</label>
                <input type="text" id="requested_by" name="requested_by" class="form-control" placeholder="eg:Ganel">
            </div>

            <div class="col-md-6 mt-3">
                <label for="assigned_to">Assigned To:</label>
                <input type="text" id="assigned_to" name="assigned_to" class="form-control" placeholder="eg:Aleva">
            </div>
            
           
            <div class="col-md-6 mt-3">
                <label for="complain_observation">Complain Observation:</label>
                <input type="date" id="complain_observation" name="complain_observation" class="form-control" placeholder="Getting a drop-down menu here">
            </div>

            <div class="col-md-12 mt-3">
                <label for="comment" class="form-label">Comment:</label>
                <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
            </div>

       </div>
       
        <button type="submit" class="btn btn-primary mt-3 d-flex justify-content-center">Submit</button>
      </form>
</div>

@endsection