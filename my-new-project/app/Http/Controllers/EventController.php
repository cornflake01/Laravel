<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('events.index', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
        ]);

        Event::create([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description
        ]);

        return redirect()->route('events.index')->with('success', 'Event successfully added!');
    }
}
