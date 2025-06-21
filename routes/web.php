<?php

use App\Http\Controllers\CvInputController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;


Route::get('/',[CvInputController::class,'index'])->name('CvInput.index');
Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('PDF.generatePDF');