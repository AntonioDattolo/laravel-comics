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
    $data = [
        "film" => config("data")
];
    return view('welcome',$data);
});

Route::get('/home', function () {
    $data = [
        "film" => config("data")
];
    return view('welcome',$data);
})->name("home");
Route::get('/details/{indice}', function ($indice) {
    $data = [
        "film" => config("data")
    ];
    $comic_selected = [
        "film" => $data["film"][intval($indice)]
    ];
    return view('details', $comic_selected);
})->name("details");