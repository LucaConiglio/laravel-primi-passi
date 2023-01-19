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
    return view('home');
})->name("home");
//questa é l url che spunterà
Route::get('/about', function () {

    $user = "Luca" . " " . "Coniglio";
    $information = [
        "pane",
        "pasta",
        "carne",
        "coca-cola",
        "vino",
    ];
    //view si rifà a views page-2
    return view('page-2',  [

        "user"=>$user,
        "information"=>$information,
        "indirizzo"=>"Via degli orti",
        "numero"=>"numero 10"

    ]);
    //name il nome che abbiamo dato sulla pagina page-2
    //richiamando l'intera url {{route("about")}}
})->name("about");



