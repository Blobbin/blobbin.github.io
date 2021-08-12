<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The user that is assigned to this task.
     */
    public function assigns()
    {
        return $this->hasMany(AssignedTask::class);
    }
}
