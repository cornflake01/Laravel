@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="announcement-title">Add New Announcement</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('announcements.store') }}" method="POST" class="announcement-form">
        @csrf
        <div class="form-group">
            <label for="announcementTitle">Title:</label>
            <input type="text" class="form-control" id="announcementTitle" name="title" required>
        </div>

        <div class="form-group">
            <label for="announcementDate">Date:</label>
            <input type="date" class="form-control" id="announcementDate" name="date" required>
        </div>

        <div class="form-group">
            <label for="announcementDescription">Description:</label>
            <textarea class="form-control" id="announcementDescription" name="description" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-custom mr-2">Submit</button>
        <a href="{{ route('announcements.index') }}" class="btn btn-custom">Announcements</a>
    </form>
</div>
@endsection
