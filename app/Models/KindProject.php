<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KindProject extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "abbr"
    ];

    public $timestamps = false;

    public function projects(): HasMany
    {
        return $this->hasMany(Projects::class);
    }
}
