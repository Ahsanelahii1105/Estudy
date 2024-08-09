<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subject;
use App\Models\classes;
use App\Models\courses;

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
        return view('admin.classinsert');
    }

    public function coursestore(Request $request)
    {
        $course = new courses();
        $course->course_name = $request->name;
        $course->course_desc = $request->desc;
        $course->course_imagec = $request->desc;
        $course->course_time = $request->desc;
        $course->course_whichclass = $request->desc;
        $course->course_seats = $request->desc;
        $course->course_fees = $request->desc;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $path = 'images/class/';
        $request->image->move($path , $imagename);
        $course->course_image = $path.$imagename;

        $course->save();
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
