<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StudentGroups extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function projects(): HasOne
    {
        return $this->hasOne(Projects::class, "project_fk");
    }

    public function students(): HasMany
    {
        return $this->hasMany(User::class, "student_fk");
    }
}
