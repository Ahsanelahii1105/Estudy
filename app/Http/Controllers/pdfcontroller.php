<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\modular;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfcontroller extends Controller
{
    public function insertModular(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subjectname' => 'required|string|max:255',
            'class' => 'required|string|max:255',

            'a_section_question' => 'required|string|max:255',
            'a_awnser' => 'required|string|max:255',
            'a_section_questiontwo' => 'required|string|max:255',
            'a_awnsertwo' => 'required|string|max:255',
            'a_section_questionthree' => 'required|string|max:255',
            'a_awnserthree' => 'required|string|max:255',
            'a_section_questionfour' => 'required|string|max:255',
            'a_awnserfour' => 'required|string|max:255',
            'a_section_questionfive' => 'required|string|max:255',
            'a_awnserfive' => 'required|string|max:255',

            'b_section_question' => 'required|string|max:255',
            'b_awnser' => 'required|string|max:255',
            'b_section_questiontwo' => 'required|string|max:255',
            'b_awnsertwo' => 'required|string|max:255',
            'b_section_questionthree' => 'required|string|max:255',
            'b_awnserthree' => 'required|string|max:255',
            'b_section_questionfour' => 'required|string|max:255',
            'b_awnserfour' => 'required|string|max:255',
            'b_section_questionfive' => 'required|string|max:255',
            'b_awnserfive' => 'required|string|max:255',

            'c_section_question' => 'required|string|max:255',
            'c_awnser' => 'required|string|max:255',
            'c_section_questiontwo' => 'required|string|max:255',
            'c_awnsertwo' => 'required|string|max:255',
            'c_section_questionthree' => 'required|string|max:255',
            'c_awnserthree' => 'required|string|max:255',
            'c_section_questionfour' => 'required|string|max:255',
            'c_awnserfour' => 'required|string|max:255',
            'c_section_questionfive' => 'required|string|max:255',
            'c_awnserfive' => 'required|string|max:255',

        ]);

        // Create a new Modular entry in the database
        Modular::create([
            'title' => $request->title,
            'subjectname' => $request->subjectname,
            'class' => $request->class,

            'a_section_questiontwo' => $request->a_section_question,
            'a_awnsertwo' => $request->a_awnser,
            'a_section_questionthree' => $request->a_section_questiontwo,
            'a_awnserthree' => $request->a_awnsertwo,
            'a_section_questionfour' => $request->a_section_questionthree,
            'a_awnserfour' => $request->a_awnserthree,
            'a_section_questionfive' => $request->a_section_questionfour,
            'a_awnserfive' => $request->a_awnserfour,
            'a_section_question' => $request->a_section_questionfive,
            'a_awnser' => $request->a_awnserfive,

            'b_section_question' => $request->b_section_question,
            'b_awnser' => $request->b_awnser,
            'b_section_questiontwo' => $request->b_section_questiontwo,
            'b_awnsertwo' => $request->b_awnsertwo,
            'b_section_questionthree' => $request->b_section_questionthree,
            'b_awnserthree' => $request->b_awnserthree,
            'b_section_questionfour' => $request->b_section_questionfour,
            'b_awnserfour' => $request->b_awnserfour,
            'b_section_questionfive' => $request->b_section_questionfive,
            'b_awnserfive' => $request->b_awnserfive,

            'c_section_question' => $request->c_section_question,
            'c_awnser' => $request->c_awnser,
            'c_section_questiontwo' => $request->c_section_questiontwo,
            'c_awnsertwo' => $request->c_awnsertwo,
            'c_section_questionthree' => $request->c_section_questionthree,
            'c_awnserthree' => $request->c_awnserthree,
            'c_section_questionfour' => $request->c_section_questionfour,
            'c_awnserfour' => $request->c_awnserfour,
            'c_section_questionfive' => $request->c_section_questionfive,
            'c_awnserfive' => $request->c_awnserfive,

        ]);

        // Redirect or show success message
        return redirect()->back()->with('success', 'Data inserted successfully');
    }

    public function generatepdf($id)
    {
        $modular = modular::findOrFail($id);
        $data = [
            'title' => $modular->title,
            'subjectname' => $modular->subjectname,
            'class' => $modular->class,
            'a_section_question' => $modular->a_section_question,
            'a_awnser' => $modular->a_awnser,
            'a_section_questiontwo' => $modular->a_section_questiontwo,
            'a_awnsertwo' => $modular->a_awnsertwo,
            'a_section_questionthree' => $modular->a_section_questionthree,
            'a_awnserthree' => $modular->a_awnserthree,
            'a_section_questionfour' => $modular->a_section_questionfour,
            'a_awnserfour' => $modular->a_awnserfour,
            'a_section_questionfive' => $modular->a_section_questionfive,
            'a_awnserfive' => $modular->a_awnserfive,

            'b_section_question' => $modular->b_section_question,
            'b_awnser' => $modular->b_awnser,
            'b_section_questiontwo' => $modular->b_section_questiontwo,
            'b_awnsertwo' => $modular->b_awnsertwo,
            'b_section_questionthree' => $modular->b_section_questionthree,
            'b_awnserthree' => $modular->b_awnserthree,
            'b_section_questionfour' => $modular->b_section_questionfour,
            'b_awnserfour' => $modular->b_awnserfour,
            'b_section_questionfive' => $modular->b_section_questionfive,
            'b_awnserfive' => $modular->b_awnserfive,

            'c_section_question' => $modular->c_section_question,
            'c_awnser' => $modular->c_awnser,
            'c_section_questiontwo' => $modular->c_section_questiontwo,
            'c_awnsertwo' => $modular->c_awnsertwo,
            'c_section_questionthree' => $modular->c_section_questionthree,
            'c_awnserthree' => $modular->c_awnserthree,
            'c_section_questionfour' => $modular->c_section_questionfour,
            'c_awnserfour' => $modular->c_awnserfour,
            'c_section_questionfive' => $modular->c_section_questionfive,
            'c_awnserfive' => $modular->c_awnserfive,

        ];

        $pdf = Pdf::loadView('generate-pdf', $data);
        return $pdf->stream('E-study.pdf');
    }
}
