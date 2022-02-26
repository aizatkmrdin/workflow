<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $task = Task::all();
        $totalTask = $task->count();
        $pendingTask = Task::where('status', '=', 0)->get();
        $totalPending = $pendingTask->count();
        return view('task.index', compact('task', 'totalTask', 'pendingTask', 'totalPending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;
        $task->log = $request->log;
        $task->employee_name = $request->employee_name;
        $task->type_of_report = $request->type_of_report;
        $task->branch = $request->branch;
        $task->issue = $request->issue;
        $task->status = false;
        $task->save();

        return redirect()->route('task.index')
            ->with('success', 'Task ' .  $task->log . ' create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taskDetail = Task::findOrFail($id);
        return view('task.show', compact('taskDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taskDetail = Task::findOrFail($id);
        return view('task.edit', compact('taskDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->log = $request->log;
        $task->employee_name = $request->employee_name;
        $task->branch = strtoupper($request->branch);
        $task->type_of_report = $request->type_of_report;
        $task->issue = $request->issue;
        $task->status = $request->status == 'on' ? 1 : 0;
        $task->save();

        return redirect()->route('task.index')
            ->with('success', 'Task ' .  $task->log . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        //
    }
}
