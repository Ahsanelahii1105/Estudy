<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\PDF;

class CertificateController extends Controller
{
    public function generateCertificate($id)
    {
        $student = Student::findOrFail($id);

        $data = [
            'name' => $student->name,
            'marks' => $student->marks,
            'grade' => $student->grade,
        ];

        // Correctly reference the Blade view file
        $pdf = PDF::loadView('certificate', $data);

        // Return the generated PDF
        return $pdf->download('certificate.pdf');
    }


    }

