<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class pdfcontroller extends Controller
{
    public function generatepdf()
    {
        $products = User::get();
        $data = [
            'title' => 'E-Study',
            'data' => 'm/d/y',
            'products' => $products
        ];
        $pdf = Pdf::loadView('generate-pdf', $data);
        return $pdf->download('E-study.pdf');
    }
}
