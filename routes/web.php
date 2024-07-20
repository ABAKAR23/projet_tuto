<?php

use Illuminate\Support\Facades\Route;


// Route to serve the index.html file from the public directory
Route::get('/', function () {
    return file_get_contents(public_path('index.html'));
});

// routes/web.php

// Matches Route
Route::get('/matches', function () {
    return response()->file(resource_path('matches.html'));
});

// Players Route
Route::get('/players', function () {
    return response()->file(resource_path('players.html'));
})->name('players');

// Blog Route
Route::get('/blog', function () {
    return response()->file(resource_path('blog.html'));
})->name('blog');

// Contact Route
Route::get('/contact', function () {
    return response()->file(resource_path('contact.html'));
})->name('contact');

