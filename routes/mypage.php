<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::controller(WebController::class)->group(function () {
    Route::get('/', 'homePage')->name('home.page');
    Route::get('/about', 'aboutPage')->name('about.page');
    Route::get('/contact', 'contactPage')->name('contact.page');
});
