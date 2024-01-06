<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'names',
        'lastnames',
        "sex",
        'password',
        'telephone_number',
        'email',
        "rol_fk",
        "pfg_fk",
        "date_of_birth"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Roles::class, "role_fk");
    }

    public function pfg(): BelongsTo
    {
        return $this->belongsTo(Pfgs::class, "pfg_fk");
    }

    public function teacher_projects(): HasMany
    {
        return $this->hasMany(Projects::class, "teacher_fk");
    }

    public function student_groups(): BelongsTo
    {
        return $this->belongsTo(StudentGroups::class, "student_fk");
    }
}
