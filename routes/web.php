<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layout');
});

<<<<<<< Updated upstream
Route::get('/components', function() {
    return view('components.componentview');
=======
// only guests
Route::get('/homepage', function() {
    return view('static.homepage.index');
>>>>>>> Stashed changes
});
