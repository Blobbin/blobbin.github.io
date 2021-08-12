<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedTask extends Model
{
    use HasFactory;

    /**
     * The user that is assigned to this task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The main task that has been assigned.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
