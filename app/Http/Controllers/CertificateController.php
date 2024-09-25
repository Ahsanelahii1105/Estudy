<?php

namespace App\Http\Controllers;

use App\Models\student;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CertificateController extends Controller
{

    public function generateCertificate($id)
    {
            $student = student::findOrFail($id);

            $data = [
                'name' => $student->name,
                'coursename' => $student->coursename,
                'marks' => $student->marks,
                'grade' => $student->grade,
                'date' => date('d-m-Y'),
                'signature' => 'John Doe', // Example signature
            ];

            // Generate PDF using the data
            $pdf = PDF::loadView('admin.certificate', $data);

            // Return the generated PDF
            return $pdf->stream('certificate.pdf');
        }

    }

