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
Route::get('/page-2', function () {

    $user = "Luca" . " " . "Coniglio";
    $information = "Via Degli Orti " . " N. 10";

    return view('page-2',  [

        "user"=>$user,
        "information"=>$information,
        "numero"=>"numero 10"

    ]);
})->name("page-2");;


Route::get('http://127.0.0.1:8000/', function () {
    return view('welcome');
})->name("http://127.0.0.1:8000/");

