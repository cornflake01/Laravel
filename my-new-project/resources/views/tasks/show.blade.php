@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Status: {{ $task->is_completed ? '✅ Completed' : '❌ Incomplete' }}</p>
    <a href="{{ route('tasks.index') }}">Back to List</a>
@endsection
