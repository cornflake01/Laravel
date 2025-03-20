<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
        ]);

        Announcement::create([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description
        ]);

        return redirect()->route('announcements.index')->with('success', 'Announcement successfully posted!');
    }

    public function index()
    {
        $announcements = Announcement::latest()->get();
        return view('announcements.index', compact('announcements'));
    }
}
