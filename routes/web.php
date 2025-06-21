<?php

use App\Http\Controllers\CvInputController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;


Route::get('/',[CvInputController::class,'index'])->name('CvInput.index');
Route::get('/view-cv',[CvInputController::class,'cv_view'])->name('CvInput.cv_view');
// Route::post('/generate-pdf', [PDFController::class, 'generatePDF'])->name('PDF.generatePDF');
Route::match(['get', 'post'], '/generate-pdf', [PDFController::class, 'generatePDF']);