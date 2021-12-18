<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$Ucontrollers = 'App\Http\Controllers\UsersController';


Route::get('/', function () {
    return view('login');
});
Route::post('logged', $Ucontrollers.'@login');
Route::get('sing-in', function(){
    return view('sing-in');
});

Route::get('users', $Ucontrollers.'@index');

Route::post('registra', $Ucontrollers.'@addUser');