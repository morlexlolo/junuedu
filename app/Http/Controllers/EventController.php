<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Subject;
use Carbon\Carbon;
use Mtownsend\ReadTime\ReadTime;



class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventss=Event::all();
        $subjects= Subject::get();
        $events = Event::paginate(6);
        return view('event.index',compact('events','subjects','eventss'));
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
     * @param  \App\Event  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $readTime = (new ReadTime($slug))->get();
        $subjects= Subject::get();
        $mightlike=Event::inRandomOrder()->limit(4)->get();
        $event=Event::where( 'slug',$slug)->firstOrFail();
        return view('event.show',compact('event','subjects','mightlike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
