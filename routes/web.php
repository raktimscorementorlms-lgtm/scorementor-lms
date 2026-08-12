<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/each-subject", function () {
    return view("each-subject");
});

Route::get("/exam-prep", function () {
    return view("exam-prep");
});
