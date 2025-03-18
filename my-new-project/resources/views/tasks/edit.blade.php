@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required>
        <textarea name="description">{{ $task->description }}</textarea>
        <label>
            <input type="checkbox" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
            Completed
        </label>
        <button type="submit">Update</button>
    </form>
@endsection
