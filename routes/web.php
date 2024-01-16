<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyController;
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

// use Illuminate\Http\Request;
Route::get('/admin_lte', function(){
   
    return view('w1');
});


Route::get('/my-route', function(){
   
    return view('myroute');
});


Route::post('/my-route', function(Request $req){
    $data['myinput'] =  $req->input('myinput');
    return view('myroute', $data);
});

Route::post('/result', [MyController::class, 'multi']);

Route::resource('titles', C_titles::class);