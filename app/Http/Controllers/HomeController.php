<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $task = Task::all();
        $totalTask = $task->count();
        $pendingTask = Task::where('status', '=', 0)->get();
        $totalPending = $pendingTask->count();
        return view('task.index', compact('task', 'totalTask', 'pendingTask', 'totalPending'));
    }
}
