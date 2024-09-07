<?php

namespace App\Http\Controllers;

use App\Models\subs;
use App\Models\booking;
use App\Models\classes;
use App\Models\contact;
use App\Models\courses;
use App\Models\subject;
use App\Models\faculties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            return view('admin.index');
        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check()){
            return view('admin.subjectinsert');
        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    //  course feature
    public function store(Request $request)
    {
        $subject = new subject();
        $subject->subject_name = $request->name;
        $subject->subject_desc = $request->desc;
        $subject->subject_image = $request->image;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/subject/';
        $request->image->move( $path, $imagename);
        $subject->subject_image = $path.$imagename;

        $subject->save();
        return redirect()->back();
    }

    // class index
    public function classcreate()
    {
        if(Auth::check()){
            return view('admin.classinsert');
        }else{
            return redirect()->route('login');
        }
    }

    public function classstore(Request $request)
    {
        $class = new classes();
        $class->class_name = $request->name;
        $class->class_desc = $request->desc;
        $class->class_image = $request->image;
        $class->class_whichclass = $request->whichclass;
        $class->class_seats = $request->seats;
        $class->class_timing = $request->timing;
        $class->class_fees = $request->fees;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/class/';
        $request->image->move($path , $imagename);
        $class->class_image = $path.$imagename;

        $class->save();
        return redirect()->back();
    }
    public function classsubjectdetails(){

        $clases = classes::all();
        $subjects = subject::all();
        return view('index', compact([("clases"),("subjects")]));
    }


    public function bookstore(Request $request)
    {
        $books = new booking();
        $books->name = $request->name;
        $books->email = $request->email;
        $books->class = $request->class;

        $books->save();
        return redirect()->back();
    }
    public function bookdetails(){
        $book = booking::all();
        return view('admin.bookfetch', compact('book'));
    }


    // course main
    public function coursecreate()
    {
        if(Auth::check()){
            return view('admin.courseinsert');
        }else{
            return redirect()->route('login');
        }
    }

    public function coursestore(Request $request)
    {
        $course = new courses();
        $course->course_name = $request->name;
        $course->course_desc = $request->desc;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $path = 'images/course/';
            $request->image->move($path , $imagename);
            $course->course_image = $path.$imagename;
        }

        if ($request->hasFile('modular')) {
            $modular = $request->modular;
            $modularname = time().'.'.$modular->getClientOriginalExtension();
            $path = 'pdf/course/';
            $request->modular->move($path , $modularname);
            $course->course_modular = $path.$modularname;
        }

        // // Handle video upload
        // if ($request->hasFile('video')) {
        //     $video = $request->file('video');
        //     $videoname = time() . '.' . $video->getClientOriginalExtension();
        //     // Save video to 'public/videos/class' and get its path
        //     $path = $video->storeAs('videos/class', $videoname, 'public');
        //     $course->course_video = $path;
        // }

        $course->save();
        return redirect()->back();
    }

    public function coursedetails(){
            $courses = courses::all();
            return view('courses', compact('courses'));
    }

    // sub main
    public function SUBcreate()
    {
        if(Auth::check()){
            return view('admin.subinsert');
        }else{
            return redirect()->route('login');
        }
    }


    public function SUBstore(Request $request)
    {
        $sub = new subs();
        $sub->sub_name = $request->name;
        $sub->sub_desc = $request->desc;
        $sub->sub_image = $request->image;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/sub/';
        $request->image->move($path , $imagename);
        $sub->sub_image = $path.$imagename;

        $sub->save();
        return redirect()->back();
    }

    public function subdetails(){
            $subs = subs::all();
            return view('subject' , compact('subs'));
    }

    // faculty main
    public function facultycreate()
    {
        if(Auth::check()){
            return view('admin.facultyinsert');
        }else{
            return redirect()->route('login');
        }
    }

    public function facultystore(Request $request)
    {
        $faculty = new faculties();
        $faculty->faculty_name = $request->name;
        $faculty->faculty_desc = $request->desc;
        $faculty->faculty_image = $request->image;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/class/';
        $request->image->move($path , $imagename);
        $faculty->faculty_image = $path.$imagename;

        $faculty->save();
        return redirect()->back();
    }

    public function facultydetails(){
            $faculties = faculties::all();
            return view('faculty' , compact('faculties'));
    }

    // CONTACT ZZZ
    public function contactcreate()
    {
            return view('contact');
    }

    public function contactstore(Request $request)
    {
        $contact = new contact();
        $contact->contact_name = $request->name;
        $contact->contact_email = $request->email;
        $contact->contact_subject = $request->subject;
        $contact->contact_message = $request->message;

        $contact->save();

         return redirect()->back();
    }

    public function contactdetails(){
        if(Auth::check()){
            $contacts = contact::all();
            return view('admin.contactfetch' , compact('contacts'));
        }else{
            return redirect()->route('login');
        }
    }



    // // index vido course page

    public function authvidcor(int $id)
    {
        if(Auth::check()){
            $video= courses::find($id);
            return view('videopage', compact('video'));
        }else{
            return redirect()->route('login');
        }
    }

    // index vido sub page

    public function authvidsub()
    {
        if(Auth::check()){
            return view('videosub');
        }else{
            return redirect()->route('login');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
