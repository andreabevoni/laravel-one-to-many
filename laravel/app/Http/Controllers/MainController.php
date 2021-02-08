<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;
use App\Typology;

class MainController extends Controller
{

  public function home() {
    return view('pages.home');
  }

  // EMPLOYEES
  public function empIndex() {
    $employees = Employee::all();
    return view('pages.emp-index', compact('employees'));
  }

  public function empShow($id) {
	  $employee = Employee::findOrFail($id);
	  return view('pages.emp-show', compact('employee'));
  }

  public function empCreate() {
    return view('pages.emp-create');
  }

  public function empStore(Request $request) {
    Employee::create($request -> all());
    return redirect() -> route('emp-index');
  }

  public function empEdit($id) {
    $employee = Employee::findOrFail($id);
    return view('pages.emp-edit', compact('employee'));
  }

  public function empUpdate(Request $request, $id) {
    $employee = Employee::findOrFail($id);
    $employee -> update($request -> all());
    return redirect() -> route('emp-index');
  }

  // TASKS
  public function taskIndex() {
    $tasks = Task::all();
    return view('pages.task-index', compact('tasks'));
  }

  public function taskShow($id) {
    $task = Task::findOrFail($id);
    return view('pages.task-show', compact('task'));
  }

  public function taskCreate() {
    $employees = Employee::all();
    return view('pages.task-create', compact('employees'));
  }

  public function taskStore(Request $request) {
    $task = Task::make($request -> all());
    $employee = Employee::findOrFail($request -> get('employee_id'));
    $task -> employee() -> associate($employee);
    $task -> save();
    return redirect() -> route('task-index');
  }

  public function taskEdit($id) {
    $task = Task::findOrFail($id);
    $employees = Employee::all();
    return view('pages.task-edit', compact('task', 'employees'));
  }

  public function taskUpdate(Request $request, $id) {
    $task = Task::findOrFail($id);
    $task -> update($request -> all());
    $employee = Employee::findOrFail($request -> get('employee_id'));
    $task -> employee() -> associate($employee);
    $task -> save();
    return redirect() -> route('task-index');
  }

  // TYPOLOGIES
  public function typoIndex() {
    $typologies = Typology::all();
    return view('pages.typo-index', compact('typologies'));
  }

  public function typoShow($id) {
    $typology = Typology::findOrFail($id);
    return view('pages.typo-show', compact('typology'));
  }

  public function typoCreate() {
    $tasks = Task::all();
    return view('pages.typo-create', compact('tasks'));
  }

  public function typoStore(Request $request) {
    $typology = Typology::create($request -> all());
    $seltasks = Task::findOrFail($request -> get('tasks'));
    $typology -> tasks() -> attach($seltasks);
    return redirect() -> route('typo-index');
  }

  public function typoEdit($id) {
    $typology = Typology::findOrFail($id);
    $tasks = Task::all();
    return view('pages.typo-edit', compact('typology', 'tasks'));
  }

  public function typoUpdate(Request $request, $id) {
    $typology = Typology::findOrFail($id);
    $typology -> update($request -> all());

    if (array_key_exists('tasks', $request -> all())) {
      $seltasks = Task::findOrFail($request -> get('tasks'));
      $typology -> tasks() -> sync($seltasks);
    } else {
      $typology -> tasks() -> detach();
    }

    return redirect() -> route('typo-index');
  }

}
