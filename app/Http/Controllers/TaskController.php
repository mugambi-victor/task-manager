<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ('Hello wolrd');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        // Customize validation rules according to your requirements
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        // Add any other validation rules needed
    ]);

    // Create a new Task instance using the validated data
    $task = Task::create($validatedData);

    // You can optionally return a response to indicate success or provide additional data
    return response()->json([
        'message' => 'Task created successfully',
        'task' => $task, // Include the newly created task in the response
    ]);
}

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
