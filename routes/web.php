<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* TODO:
if(exists({folder}) return view({folder}.'/index'));
else return function() ... directory
*/
Route::get('/phpdasar/{folder}/{file}', function ($folder, $file) {
    $path = "phpdasar/$folder/$file"; 
    if (view()->exists($path)) {
        return view($path);
    } else {
        abort(404); 
    }
});

// daftar file otomatis
Route::get('/{path?}', function ($path = '') {
    $directory = public_path($path);
// 404 jika URL yang dimasuki kosong
    if (!is_dir($directory)) {
        abort(404);
    }
// hilangkan direktori . dan ..
    $items = array_diff( scandir($directory), array('.', '..') );

    return view('index', ['items' => $items, 'path' => $path]);
})->where('path', '.*');
