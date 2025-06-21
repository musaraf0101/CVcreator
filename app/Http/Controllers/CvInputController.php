<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvInputController extends Controller
{
    public function index(){
        return view('input_view');
    }
}
