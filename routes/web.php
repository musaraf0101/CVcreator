<?php

use App\Http\Controllers\CvInputController;
use Illuminate\Support\Facades\Route;


Route::get('/',[CvInputController::class,'index'])->name('CvInput.index');
