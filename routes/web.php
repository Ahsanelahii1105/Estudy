<?php

use App\Models\classes;
use App\Models\subject;
use App\Models\faculties;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
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
            $clases = classes::all();
            $subjects = subject::all();
            $faculties = faculties::all();
            return view('index', compact([("clases"),("subjects"),("faculties")]));
        }
    })->name('dashboard');
});

// pdf ROUTE
Route::get('generate-pdf', [App\Http\Controllers\pdfController::class, 'generatepdf']);

// navbar

Route::get('/' , [WebsiteController::class , 'index']);


Route::get('/chat', function () {
    return view('chat');
});

Route::get('/terms_condition', function () {
    return view('terms_condition');
});

Route::get('/about', function () {
    return view('about');
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

//------------------------ for faculty data
Route::get('/admin/insertfaculty' , [AdminController::class , 'facultycreate']);
Route::post('/admin/insertfaculty' , [AdminController::class , 'facultystore']);
Route::get('faculty' , [AdminController::class , 'facultydetails']);

//------------------------ for contact data
Route::get('/contact' , [AdminController::class , 'contactcreate']);
Route::post('/insert' , [AdminController::class , 'contactstore']);
Route::get('/admin/contactfetch' , [AdminController::class , 'contactdetails']);


Route::get('/admin/regfetch' , [AdminController::class , 'regfetch']);

//------------------------ for booking data
Route::post('/insertwo' , [AdminController::class , 'bookstore']);
Route::get('/admin/bookfetch' , [AdminController::class , 'bookdetails']);

//------------------------ video course
Route::get('/videopage/{id?}' , [AdminController::class , 'authvidcor'])->name('videopage');
//------------------------ video sub
Route::get('/videosub/{id?}' , [AdminController::class , 'authvidsub'])->name('videosub');

//------------------------ discussion library
// Route::get('/discussionLibrary', [AdminController::class, 'discussionLibrary']);


Route::get('/discussionLibrary' , [AdminController::class , 'librarycreate']);
Route::post('/discussionLibrary' , [AdminController::class , 'librarystore']);
Route::get('faculty' , [AdminController::class , 'facultydetails']);

//------------------------- QUIZ ROUTE

Route::any('/quizIndex', function () {
    return view('quiz/quizIndex');
});

Route::any('/ansDesk', function () {
    return view('quiz/answerDesk');
});

Route::any('/quizStart', function () {
    return view('quiz/start');
});

Route::any('/quizEnd', function () {
    return view('quiz/end');
});

Route::any('/quiz/startquiz',[QuizController::class,  'startquiz']);

Route::any('/quiz/submitans',[QuizController::class,  'submitans']);

Route::any('/quiz/add',[QuizController::class,  'add']);

Route::any('/quiz/update',[QuizController::class,  'update']);

Route::any('/quiz/delete',[QuizController::class,  'delete']);

Route::get('/quiz/question', [QuizController::class, 'showque']);

