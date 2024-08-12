<?php

namespace App\Http\Controllers;

use App\Models\subs;
use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\classes;
use App\Models\courses;
use App\Models\faculties;
use App\Models\contacts;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subjectinsert');
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
        return view('admin.classinsert');
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

    // course main
    public function coursecreate()
    {
        return view('admin.courseinsert');
    }

    public function coursestore(Request $request)
    {
        $course = new courses();
        $course->course_name = $request->name;
        $course->course_desc = $request->desc;
        $course->course_image = $request->image;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/class/';
        $request->image->move($path , $imagename);
        $course->course_image = $path.$imagename;

        $course->save();
        return redirect()->back();
    }

    // sub main
    public function SUBcreate()
    {
        return view('admin.subinsert');
    }

    public function SUBstore(Request $request)
    {
        $sub = new subs();
        $sub->sub_name = $request->name;
        $sub->sub_desc = $request->desc;
        $sub->sub_image = $request->image;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/class/';
        $request->image->move($path , $imagename);
        $sub->sub_image = $path.$imagename;

        $sub->save();
        return redirect()->back();
    }
    
    // faculty main
    public function facultycreate()
    {
        return view('admin.facultyinsert');
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

    // CONTACT 
    public function contactcreate()
    {
        return view('contact');
    }

    public function contactstore(Request $request)
    {
        $contact = new contacts();
        $contact->contact_name = $request->name;
        $contact->contact_email = $request->email;
        $contact->contact_subject = $request->subject;
        $contact->contact_message = $request->message;

        return redirect()->back();
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
