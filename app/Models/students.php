<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class students extends Model
{
    use HasFactory;
    public function projects(): HasOne
    {
        return $this->hasOne(Projects::class, "project_groups", "student_id", "project_id");
    }
}
