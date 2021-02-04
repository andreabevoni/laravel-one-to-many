<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;

class MainController extends Controller
{
  // funzioni index
  public function empIndex() {
    $employees = Employee::all();
    return view('pages.emp-index', compact('employees'));
  }

  public function taskIndex() {
    $tasks = Task::all();
    return view('pages.task-index', compact('tasks'));
  }

  // funzioni SHOW
  public function empShow($id){
	  $employee = Employee::findOrFail($id);
	  return view('pages.emp-show', compact('employee'));
  }

  public function taskShow($id){
    $task = Task::findOrFail($id);
    return view('pages.task-show', compact('task'));
  }

  // funzioni CREATE + STORE
  public function empCreate(){
    return view('pages.emp-create');
  }

  public function empStore(Request $request){
    Employee::create($request -> all());
    return redirect() -> route('emp-index');
  }

  public function taskCreate(){
    $employees = Employee::all();
    return view('pages.task-create', compact('employees'));
  }

  public function taskStore(Request $request){
    $task = Task::make($request -> all());
    $employee = Employee::findOrFail($request -> get('employee_id'));
    $task -> employee() -> associate($employee);
    $task -> save();
    return redirect() -> route('task-index');
  }

  // funzioni EDIT + UPDATE
  public function empEdit($id){
    $employee = Employee::findOrFail($id);
    return view('pages.emp-edit', compact('employee'));
  }

  public function empUpdate(Request $request, $id){
    $employee = Employee::findOrFail($id);
    $employee -> update($request -> all());
    return redirect() -> route('emp-index');
  }

}
