<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $nav = ['Instagram', 'Facebook',];
    return view('welcome', compact('nav'));
});
