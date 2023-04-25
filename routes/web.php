<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComplainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// //Routes for Login Page
// Route::get('/', function () {
    
    
//     $title='Login';
//     return view('login',compact('title'));
//     // $tasks=DB::table('teachers_data')->get();
//     // return $tasks;
// });



//---------------------------------------------------------------------------
//  user side


Route::get('/', [UserController::class, 'login']);

Route::post('/user/login', [UserController::class,'submit_login']);

Route::get('/user/complain_form', [UserController::class, 'complain_form']);

Route::get('/user/remark',[UserController::class,'remark']);

Route::get('/logout',[UserController::class,'logout']);



// Filling Complains

Route::post('/user/complain_form',[ComplainController::class,'register']);