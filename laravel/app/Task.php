<?php

namespace App;

use App\Task;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'title',
    'description',
    'priority'
  ];

  public function employee() {
    return $this -> belongsTo(Task::class);
  }
}
