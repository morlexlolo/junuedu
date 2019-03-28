<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class FaqController extends Controller
{
    public function index()
    {
        $subjects= Subject::get();
        return view('faq',compact('subjects'));
    }
}
