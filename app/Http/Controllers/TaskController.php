<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function store(Request $request)
  {
    $validated = $request->validate([
        'name' => 'required|max:255',
        'task' => 'required|min:5|max:255',
        'completed' => 'required',
    ]);
    $values = $request->all();
    $values['completed'] = $values['completed'] === 'on' ? true : false;
    $task = new Task($values);
    $userId = Auth::user()->id;
    $task->setAttribute('user_id', $userId); // we should'nt be doing this
    $task->save();

    return redirect('/task');
   }
}
