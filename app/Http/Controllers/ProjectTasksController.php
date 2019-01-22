<?php

namespace App\Http\Controllers;

use App\Task;


class ProjectTasksController extends Controller
{
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Task $task)
    {
        //dd(request()->all());
        $task->update([
            'completed' => request()->has('completed')
        ]);
        
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
