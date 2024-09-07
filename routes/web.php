<?php

use App\Models\classes;
use App\Models\subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

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
            $clases = classes::all();
            return view('index' , compact('subjects', 'clases'));
        }
    })->name('dashboard');
});


// navbar

Route::get('/' , [WebsiteController::class , 'index']);


Route::get('/chat', function () {
    return view('chat');
});

Route::get('/terms_condition', function () {
    return view('terms_condition');
});


//-------------Routes By TH for Inserting Data-------------
Route::get('/admin/home' , [AdminController::class , 'index']);

// for course
Route::get('/admin/insertsubject' , [AdminController::class , 'create']);
Route::post('/admin/insertsubject' , [AdminController::class , 'store']);

// for classes
Route::get('/admin/insertclass' , [AdminController::class , 'classcreate']);
Route::post('/admin/insertclass' , [AdminController::class , 'classstore']);
Route::get('/' , [AdminController::class , 'classsubjectdetails']);

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
Route::post('/insertwo' , [AdminController::class , 'bookstore']);
Route::get('/admin/bookfetch' , [AdminController::class , 'bookdetails']);

// video course
Route::get('/videopage/{id}' , [AdminController::class , 'authvidcor'])->name('videopage');

// video sub
Route::get('/videosub' , [AdminController::class , 'authvidsub']);

// index about
Route::get('/about' , [AdminController::class , 'authabout']);
