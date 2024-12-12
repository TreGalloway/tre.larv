<?php

use Illuminate\Support\Facades\Route;

Route::get("/welcome", function () {
    return view("welcome");
});
Route::get("/", function () {
    return view("home");
});
Route::get("/work", function () {
    return view("work");
});
Route::get("/newsletter", function () {
    return view("newsletter");
});
Route::get("/uses", function () {
    return view("uses");
});
