<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;

class MainController extends Controller
{
  public function empIndex() {
    $employees = Employee::all();
    return view('pages.emp-index', compact('employees'));
  }

  public function taskIndex() {
    $tasks = Task::all();
    return view('pages.task-index', compact('tasks'));
  }

  public function empShow($id){
	  $employee = Employee::findOrFail($id);
	  return view('pages.emp-show', compact('employee'));
  }

  public function taskShow($id){
    $task = Task::findOrFail($id);
    return view('pages.task-show', compact('task'));
  }

  public function empCreate(){
    return view('pages.emp-create');
  }

  public function empStore(Request $request){
    Employee::create($request -> all());
    return redirect() -> route('emp-index');
  }

}
