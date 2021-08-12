<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\AssignedTask;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assigned = Auth::user()->assigned_tasks;

        return view('tasks.index', [
            'assigned' => $assigned,
        ]);
    }

    /**
     * Displays a listing of **all** tasks.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        if (Auth::user()->role == 'student') {
            abort(403, "Unauthorized");
          }
        $tasks = Task::all();

        return view('tasks.all', [
            'tasks' => $tasks,
        ]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    /**
     * Mark the selected task as completed.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function mark($id)
    {
        $assignment = AssignedTask::findOrFail($id);
        $assignment->completed = true;
        $assignment->save();
        return redirect()->route('tasks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create', [
            'groups' => Group::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group_id = $request->input('group');
        $group = Group::findOrFail($group_id);

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'due_date' => 'required'
        ]);    

        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->due_date = $request->input('due_date');
        $task->save();

        // This isn't really efficient, but saves having to look up how to do it properly.
        // There is a rough error case where not all students may get an assignment, i.e.
        // it fails halfway through. To do it properly we have to make sure this is inside
        // a transaction, or we do it atomically.
        foreach ($group->users as $user) {
            $assignment = new AssignedTask();
            $assignment->task_id = $task->id;
            $assignment->user_id = $user->id;
            $assignment->save();
        }

        return redirect()->route('tasks.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'due_date' => 'required'
        ]);   
        
        $task = Task::findOrFail($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->due_date = $request->input('due_date');
        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        return view('tasks.remove', [
            'task' => Task::findOrFail($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
