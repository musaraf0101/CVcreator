<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'objective' => 'required|string',
            'education' => 'required|array',
            'education.*' => 'required|string',
            'qualification' => 'required|array',
            'qualification.*' => 'required|string',
            'project_title' => 'required|array',
            'project_title.*' => 'required|string',
            'project_link' => 'required|array',
            'project_link.*' => 'required|url',
            'project_description' => 'nullable|array',
            'project_description.*' => 'nullable|string',
            'skill' => 'required|array',
            'skill.*' => 'required|string',
            'proficiency' => 'required|array',
            'proficiency.*' => 'required|string',
            'certificate_institute' => 'required|array',
            'certificate_institute.*' => 'required|string',
            'certificate_start' => 'required|array',
            'certificate_start.*' => 'required|date',
            'certificate_end' => 'required|array',
            'certificate_end.*' => 'required|date|after_or_equal:certificate_start.*',
            'certificate_link' => 'required|array',
            'certificate_link.*' => 'required|url',
            'certificate_description' => 'nullable|array',
            'certificate_description.*' => 'nullable|string',
            'social_platform' => 'nullable|array',
            'social_platform.*' => 'nullable|string',
            'social_url' => 'nullable|array',
            'social_url.*' => 'nullable|url',
        ]);

        $data = $request->all();

        $pdf = Pdf::loadView('components.cv', $data);

        return $pdf->download('resume.pdf');
    }
}
