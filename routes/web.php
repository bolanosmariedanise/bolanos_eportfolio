<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Static portfolio — no database, no models.
| All content is hardcoded in Blade or passed as plain PHP arrays.
*/

Route::get('/', function () {
    $portfolio = [
        'title' => 'Marie Danise Bolanos',
        'description' => 'Personal portfolio — BSIT Student',
    ];

    return view('home', $portfolio);
});
