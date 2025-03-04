@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Task List</h1>
    <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600">
        Create New Task
    </a>

    <ul class="space-y-2">
        @foreach ($tasks as $task)
            <li class="bg-white p-4 rounded shadow flex items-center justify-between">
                <div>
                    <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-600 hover:underline font-semibold">
                        {{ $task->title }}
                    </a> -
                    @if ($task->is_completed)
                        ✅ <span class="text-green-600">Completed</span>
                    @else
                        ❌ <span class="text-red-600">Incomplete</span>
                    @endif
                </div>
                <div>
                    <a href="{{ route('tasks.edit', $task->id) }}"
                       class="text-yellow-500 hover:text-yellow-600 mr-2">
                       ✏️ Edit
                    </a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="text-red-500 hover:text-red-600"
                                onclick="return confirm('Are you sure you want to delete this task?')">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
