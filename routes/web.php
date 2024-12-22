<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layout');
});

Route::get('/components', function() {
    return view('components.componentview');
});
