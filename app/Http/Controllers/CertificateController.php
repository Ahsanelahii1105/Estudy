<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\PDF;

class CertificateController extends Controller
{
    public function insertStudent(Request $request)
{
    // Validate form data
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:students',
        'coursename' => 'required|string',
        'marks' => 'required|numeric',
        'grade' => 'required|string',
    ]);

    // Insert data into the 'students' table
    Student::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'coursename' => $request->input('coursename'),
        'marks' => $request->input('marks'),
        'grade' => $request->input('grade'),
    ]);

    return redirect()->back()->with('success', 'Student data inserted successfully!');
}


    public function generateCertificate($id)
    {
        $student = Student::findOrFail($id);

        $data = [
            'name' => $student->name,
            'coursename' => $student->coursename,
            'marks' => $student->marks,
            'grade' => $student->grade,
        ];

        // Correctly reference the Blade view file
        $pdf = PDF::loadView('certificate', $data);

        // Return the generated PDF
        return $pdf->stream('certificate.pdf');
    }


    }

