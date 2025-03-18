@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-blue-900 text-white p-5 flex flex-col space-y-4">
        <h2 class="text-2xl font-semibold">Admin Dashboard</h2>
        <nav class="flex flex-col space-y-2">
            <a href="{{ route('dashboard.students') }}" class="bg-blue-700 hover:bg-blue-600 p-3 rounded">Student Information</a>
            <a href="{{ route('dashboard.announcements') }}" class="bg-blue-700 hover:bg-blue-600 p-3 rounded">School Announcements</a>
            <a href="{{ route('dashboard.calendar') }}" class="bg-blue-700 hover:bg-blue-600 p-3 rounded">School Calendar</a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10">
        <h1 class="text-3xl font-bold text-gray-800">Welcome to the Admin Dashboard</h1>
        <p class="mt-2 text-gray-600">Use the sidebar to navigate through different sections.</p>
    </div>
</div>
@endsection
