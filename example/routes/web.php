<?php

use App\Http\Controllers\myController;
use Illuminate\Http\Request;
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

Route::get('/my-controller', [myController::class, 'index']);
Route::get('/my-controller2', 'App\Http\Controllers\myController@index');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'myController@index');
});

Route::resource('/my-controller4', myController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function(){
    $data = ['val_a' => 'Hello world'];
    $data['val_b'] = "Laravel";
    echo view('myfolder.mypage' ,$data);
});

Route::post('/my-route', function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});

Route::get('/my-multiple', function(){
    return view('myfolder.mymultiple');
});

Route::post('/my-multiple', function(Request $req){
    $data['input'] = $req->input('input');
    return view('myfolder.mymultiple' , $data);
});



