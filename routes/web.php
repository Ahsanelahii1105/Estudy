<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use App\Models\subject;

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
        if(Auth::User()->role==1){
            return view('admin.index');
        }else{
            $subjects = subject::all();
            return view('index' , compact('subjects'));
        }
    })->name('dashboard');
});


// navbar

Route::get('/' , [WebsiteController::class , 'index']);

Route::get('/subject', function () {
    return view('subject');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/faculty', function () {
    return view('faculty');
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

Route::get('/videopage', function () {
    return view('videopage');
});



//-------------Routes By TH for Inserting Data-------------
Route::get('/admin/home' , [AdminController::class , 'index']);

// for course
Route::get('/admin/insertsubject' , [AdminController::class , 'create']);
Route::post('/admin/insertsubject' , [AdminController::class , 'store']);

// for classes
Route::get('/admin/insertclass' , [AdminController::class , 'classcreate']);
Route::post('/admin/insertclass' , [AdminController::class , 'classstore']);
Route::get('/' , [AdminController::class , 'coursesubjectdetails']);

// for course main
Route::get('/admin/insertcourse' , [AdminController::class , 'coursecreate']);
Route::post('/admin/insertcourse' , [AdminController::class , 'coursestore']);
Route::get('/courses' , [AdminController::class , 'coursedetails']);

// for sub main
Route::get('/admin/insertsub' , [AdminController::class , 'SUBcreate']);
Route::post('/admin/insertsub' , [AdminController::class , 'SUBstore']);
Route::get('/subject' , [AdminController::class , 'subdetails']);

// for faculty data
Route::get('/admin/insertfaculty' , [AdminController::class , 'facultycreate']);
Route::post('/admin/insertfaculty' , [AdminController::class , 'facultystore']);
Route::get('faculty' , [AdminController::class , 'facultydetails']);

// for contact data
Route::get('/contact' , [AdminController::class , 'contactcreate']);
Route::post('/insert' , [AdminController::class , 'contactstore']);
Route::get('/admin/contactfetch' , [AdminController::class , 'contactdetails']);

// for booking data
Route::get('/' , [AdminController::class , 'bookcreate']);
Route::post('/insertwo' , [AdminController::class , 'bookstore']);
Route::get('/admin/bookfetch' , [AdminController::class , 'bookdetails']);
