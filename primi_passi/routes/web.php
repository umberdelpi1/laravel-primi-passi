<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $nav = ['Home', 'Chi siamo', 'Contattaci', 'Blog'];
    return view('welcome', compact('nav'));
});
