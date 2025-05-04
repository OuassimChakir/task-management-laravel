<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('pages.tasks.create');
    }

    public function store(StoreTaskRequest $request)
    {
        // Store the task in the database

        // Pour Inserer une seul entité
        // $task = new Task();
        // $task->title = $request->title;
        // $task->description = $request->description;
        // $task->status = $request->status;
        // $task->save();

        // Pour Inserer plusieurs entités (Mass Assignment)
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.create')->with('success', 'Task created successfully!');
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
