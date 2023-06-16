<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $task = task::all();
        return view('home', compact('task'));
    }

    public function store(Request $request)
    {
        $data = $request -> validate([
            'content' => 'required'
        ]);

        task::create($data);
        return back();
    }

    public function destroy(task $task)
    {
        $task->delete();
        return back();
    }
}
