<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "resume",
        "isPresent",
    ];

    /*     public function user(): belongsToMany
    {
        return $this->belongsToMany(User::class, "project_groups");
    } */
    public function teachers(): BelongsTo
    {
        return $this->belongsTo(User::class, "teacher_fk");
    }
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "project_groups")->using(ProjectGroups::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function kindProject(): BelongsToMany
    {
        return $this->belongsToMany(KindProject::class);
    }
}
