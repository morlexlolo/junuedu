<?php

namespace App\Http\Controllers;

use App\PastPaper;
use Illuminate\Http\Request;
use App\Subject;
use Dotenv\Regex\Result;

class PastPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subjects= Subject::all();
        if (request()->subject) {
            $past_papers=PastPaper::with('subject')->whereHas('subject', function ($query) {
                $query->where('slug', request()->subject);
            });

            $subjectName=optional($subjects->where('slug', request()->subject)->first())->name;
        } else {
            $past_papers =PastPaper::take(12);
            $subjectName='Subjects';
        }
        if (request()->sort=='new') {
            $past_papers =$past_papers->orderBy('year')->paginate(6);
        } elseif (request()->sort=='old') {
            $past_papers =$past_papers->orderBy('year', 'desc')->paginate(6);
        } else {
            $past_papers=$past_papers->paginate(6);
        }
        return view('paper.index', compact('subjects', 'past_papers', 'subjectName'));
    }

    public function search(Request $request)
    {
        $query=$request->input('query');
        $subjects= Subject::all();
        // $past_papers =PastPaper::where('file','like',"%$query%")
        //                         ->orWhere('name','like',"%$query%")
        //                         ->orWhere('slug','like',"%$query%")->paginate(6);
        // return view('paper.search_result')->with('past_papers',$past_papers)
        //                                   ->with('subjects',$subjects);


        $past_papers = PastPaper::search($query)->paginate(6);
        return view('paper.search_result')->with('past_papers',$past_papers)
                                         ->with('subjects',$subjects);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function show(PastPaper $pastPaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function edit(PastPaper $pastPaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PastPaper $pastPaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(PastPaper $pastPaper)
    {
        //
    }
}
