@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add School Events</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('events.store') }}" method="POST" class="event-form">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <button type="submit" class="btn btn-custom">Create Event</button>
    </form>

    <h2>Upcoming Events</h2>
    <ul>
        @foreach ($events as $event)
            <li><strong>{{ $event->title }}</strong> - {{ $event->date }} <br> {{ $event->description }}</li>
        @endforeach
    </ul>
</div>
@endsection
