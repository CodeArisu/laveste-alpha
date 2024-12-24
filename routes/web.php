<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/homepage');
});

Route::get('/homepage', function() {
    return view('static.homepage.index');
});

Route::get('/components', function() {
    return view('components.componentview');
});

