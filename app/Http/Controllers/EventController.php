<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $title = 'Event';

        $events = Event::with('creator')
            ->latest('date')
            ->get();

        return view('event', compact('events', 'title'));
    }

    public function show($slug)
    {
        $events = Event::where('slug', $slug)->with('creator')->firstOrFail();
        $title = $events->title;

        return view('event_details', compact('events', 'title'));
    }
}
