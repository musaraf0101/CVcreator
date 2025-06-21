<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvInputController extends Controller
{
    public function index(){
        return view('input_view');
    }
    public function cv_view(){
        return view('cv_view');
    }
}
