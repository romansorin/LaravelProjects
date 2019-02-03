<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    /*protected $fillable = [
    'title', 'description',
    ];*/
    protected $guarded = [];
    //$guarded is the exact opposite of fillable; these fields cannot be submit

    public function tasks() {
        return $this->hasMany(Task::class);
    }
    public function addTask($task) {
        $this->tasks()->create($task);
    }
}
