<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/infaq', function () {
    return view('infaq');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/tausyiah', function () {
    return view('tausyiah');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/dana-tersalurkan', function () {
    return view('dana_tersalurkan');
});

Route::get('/blog', function () {
    return view('blog');
});