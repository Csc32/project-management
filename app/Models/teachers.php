<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class teachers extends Model
{
    use HasFactory;

    public function projects(): HasMany
    {
        return $this->hasMany(Projects::class, "project_groups", "teacher_id", "project_id");
    }
}
