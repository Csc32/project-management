<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Roles extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["name"];

    const ROLE_ADMINISTRATOR = 1;
    const ROLE_TEACHER = 2;
    const ROLE_STUDENT = 3;

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permissions::class);
    }
    public function users(): HasMany
    {
        return $this->hasMany(User::class, "rol_fk");
    }
}
