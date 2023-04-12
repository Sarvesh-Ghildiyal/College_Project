<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $title='Login';
    return view('login',compact('title'));
});


Route::post('/complain_form', function () {
    $title='Complain Form';
    return view('complain_form',compact('title'));
});

Route::get('/complain_status', function () {
    $title='Complain Status';
    return view('complain_status',compact('title'));
});

Route::get('/complain_remark', function () {
    $title='Complain Remarks';
    return view('remark',compact('title'));
});


Route::get('/dashboard', function () {
    $title='Dashboard';
    return view('dashboard',compact('title'));
});
