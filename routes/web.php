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

    $blocco_r = ["Plus", "Spaces", "Get Certified"];
    $logIn = "log in";
    $register = "Sing Up";
    $blocco_s = ["Toutorial", "Exercises", "Crtificates", "Servics"];
    $languages = ["HTML", "CSS", "JS", "PYTHON", "LARAVELL", "PHP", "BOOTSTRAP", "VUE"];

    $data = [

        "blocco_r"  => $blocco_r,
        "logIn"     => $logIn,
        "register"  => $register,

        "blocco_s"  => $blocco_s,

        "languages" => $languages,
    ];

    return view('home', $data);
})->name('home');


Route::get('/{lang}', function ($lang) {
    
    $blocco_r = ["Plus", "Spaces", "Get Certified"];
    $logIn = "log in";
    $register = "Sing Up";
    $blocco_s = ["Toutorial", "Exercises", "Crtificates", "Servics"];
    $languages = ["HTML", "CSS", "JS", "PYTHON", "LARAVELL", "PHP", "BOOTSTRAP", "VUE"];

    $data = [

        "blocco_r"  => $blocco_r,
        "logIn"     => $logIn,
        "register"  => $register,

        "blocco_s"  => $blocco_s,

        "languages" => $languages,
    ];
    
    // Verifica che la lingua esista nell'array
    if (in_array(strtoupper($lang), $languages)) {
        return view('languages.' . strtolower($lang), $data);
    } else {
        abort(404);
    }
})->name('language.show');
