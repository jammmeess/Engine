<?php

use Illuminate\Support\Facades\Route;

////////////PUBLIC ///////////
Route::get("/", function () {
    return view("home");
});
