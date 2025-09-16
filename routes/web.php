<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('why-us', function () {
    return view('why-us');
})->name('whyUs');

Route::get('about-us', function () {
    return view('about');
})->name('about');

Route::get('our-services', function () {
    return view('services');
})->name('services');

Route::get('contact-us', function () {
    return view('contact');
})->name('contact');
