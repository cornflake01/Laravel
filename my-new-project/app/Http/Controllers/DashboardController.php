<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function students()
    {
        return view('dashboard.students');
    }

    public function announcements()
    {
        return view('dashboard.announcements');
    }

    public function calendar()
    {
        return view('dashboard.calendar');
    }
}
