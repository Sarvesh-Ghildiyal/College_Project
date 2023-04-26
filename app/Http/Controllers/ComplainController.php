<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Complain;

class ComplainController extends Controller
{   
    function register(Request $request){

        
        $complains=new Complain;
        $complains->department=$request->input('department');
        $complains->room_no=$request->input('room_number');
        $complains->reported_by=$request->input('reported_by');
        // $complains->requested_by=$request->input('requested_by');
        $complains->problem=$request->input('problem');
        $complains->save();

        return redirect('/user/complain_form')->with('Success');

    }
}
