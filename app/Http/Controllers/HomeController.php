<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\PastPaper;
use App\Event;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $past_papers = PastPaper::inRandomOrder()->limit(3)->get();
        $events = Event::all()->take(3);
        $eventss = Event::all();

        $subjects= Subject::get();
        $posts = Post::all();
        return view('welcome',compact('subjects','posts','events','past_papers','eventss'));
    }
}
