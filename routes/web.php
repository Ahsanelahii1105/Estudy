<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// navbar 

Route::get('/', function(){
    return view('index');
});

Route::get('/subject', function () {
    return view('subject');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/faculty', function () {
    return view('faculty');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/chat', function () {
    return view('chat');
});


Route::get('/work', function () {
    return view('work');
});

Route::get('/terms_condition', function () {
    return view('terms_condition');
});