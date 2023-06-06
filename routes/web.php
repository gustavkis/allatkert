<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kertController;

Route::get('/', function () {
    return view('fooldal');
});

Route::get('/kapcsolat', function () {
    return view('kapcsolat');
});
Route::get('/gyik', function () {
    return view('gyik');
});


Route::get("/kert",[kertController::class,"kert"]);