<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display a listing of tasks
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    // Show the form for creating a new task (Optional for API)
    public function create()
    {
        return view('tasks.create');
    }

    // Store a newly created task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'boolean',
        ]);

        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    // Display the specified task
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // Show the form for editing the specified task (Optional for API)
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update the specified task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'boolean',
        ]);

        $task->update($request->all());
        return response()->json($task);
    }

    // Remove the specified task
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
