<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectGroups extends Pivot
{
    public function students(): HasMany
    {
        return $this->hasMany(User::class, 'student_fk');
    }

    public function projects(): HasOne
    {
        return $this->hasOne(Projects::class, 'project_fk');
    }
}
