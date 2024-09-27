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
            'b_section_question' => 'required|string|max:255',
            'b_awnser' => 'required|string|max:255',
            'c_section_question' => 'required|string|max:255',
            'c_awnser' => 'required|string|max:255',
        ]);

        // Create a new Modular entry in the database
        Modular::create([
            'title' => $request->title,
            'subjectname' => $request->subjectname,
            'class' => $request->class,
            'a_section_question' => $request->a_section_question,
            'a_awnser' => $request->a_awnser,
            'b_section_question' => $request->b_section_question,
            'b_awnser' => $request->b_awnser,
            'c_section_question' => $request->c_section_question,
            'c_awnser' => $request->c_awnser,
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
            'b_section_question' => $modular->b_section_question,
            'b_awnser' => $modular->b_awnser,
            'c_section_question' => $modular->c_section_question,
            'c_awnser' => $modular->c_awnser,
        ];

        $pdf = Pdf::loadView('generate-pdf', $data);
        return $pdf->stream('E-study.pdf');
    }
}
