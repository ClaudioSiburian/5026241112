<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\PegawaiDBController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang </h1>di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan5', function () {
	return view('pertemuan5');
});
