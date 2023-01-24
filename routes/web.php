<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Q3
Route::get('/test', function () {
    echo "test";
});
//Q4
Route::get('/phone', function () {
    return view("PhonePage");
});

//Q5
Route::get('/phonedieplay', function () {
    $phone = ['Type' => "IPhone 14", "Price" => "3600", "Color" => "Black"];
    return view("phonedetails",['phone'=>$phone]);
});

//Q6
Route::get('/oldphone', function () {
    return view("old.oldphone");
});