@extends('layouts.app') {{-- Extends the main layout --}}

@section('title', 'Admin Dashboard')

@section('content')
    <div class="side-menu">
        <div class="school-info">

            <h1>Student Portal</h1>
        </div>
        <ul>
            <li>
                <a href="{{ url('/addstudent') }}"><i class="fas fa-user-plus"></i> Add New Students</a>
            </li>
            <li>
                <a href="{{ url('/studentinfo') }}"><i class="fas fa-id-card"></i> Student Information</a>
            </li>
            <li>
                <a href="{{ url('/uploadgrades') }}"><i class="fas fa-file-upload"></i> Grades Upload</a>
            </li>
            <li>
                <a href="{{ url('/addannouncement') }}"><i class="fas fa-bullhorn"></i> Create Announcement</a>
            </li>
            <li>
                <a href="{{ url('/events') }}"><i class="fas fa-calendar-alt"></i> School Events</a>
            </li>
            <li>
                <a href="{{ url('/feedbacks') }}"><i class="fas fa-comments"></i> View Feedback</a>
            </li>
            <li>
                <a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>
@endsection
