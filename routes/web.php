<?php

use Illuminate\Support\Facades\Route;


    Route::get('/admin', function () {
        return view('admin/pages/dashboard');
    })->name('admin.dashboard');

    Route::get('/widget', function () {
        return view('admin.pages/widget');
    })->name('admin.widget');

    Route::get('/table', function () {
        return view('admin.pages/table');
    })->name('admin.table');
Route::get('/', function () {
        return view('client.pages.landing');
    })->name('client.landing');
Route::get('/about', function () {
        return view('client.pages.about');
    })->name('client.about');
    Route::get('/service', function () {
        return view('client.pages.service');
    })->name('client.service');
Route::get('/causes', function () {
        return view('client.pages.causes');
    })->name('client.causes');
Route::get('/events', function () {
        return view('client.pages.events');
    })->name('client.events');
Route::get('/contact', function () {
        return view('client.pages.contact');
    })->name('client.contact');
Route::get('/blog', function () {
        return view('client.pages.blog');
    })->name('client.blog');
Route::get('/gallery', function () {
        return view('client.pages.gallery');
    })->name('client.gallery');
Route::get('/donation', function () {
        return view('client.pages.donation');
    })->name('client.donation');
Route::get('/volunteer', function () {
        return view('client.pages.volunteer');
    })->name('client.volunteer');
Route::get('/be-a-member', function () {
        return view('client.pages.register');
    })->name('client.register');
Route::fallback(function () {
    return response()->view('client.pages.404', [], 404);
});


