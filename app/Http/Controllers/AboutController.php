<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class AboutController extends Controller
{
    public function index()
    {
        $subjects= Subject::get();
        return view('about',compact('subjects'));
    }
}
