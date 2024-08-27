<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $carbon = Carbon::parse('2021-01-01 00:00:00');
    $nullCarbon = Carbon::parse(null);
    return view('welcome')
        ->with([
            'carbon' => $carbon,
            'nullCarbon' => $nullCarbon,
        ]);
});
