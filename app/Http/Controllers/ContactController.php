<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $subjects= Subject::get();
        return view('contact',compact('subjects'));
    }
    public function send()
    {
        return ("this is email");
    }
}
