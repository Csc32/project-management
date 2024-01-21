<?php

namespace App\Policies;

use App\Models\Pfgs;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PfgPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pfgs $pfgs): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pfgs $pfgs): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $currentUser, Pfgs $pfg): bool
    {
        //
        if ($currentUser['rol_fk'] == 1 && $pfg->id !== null) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pfgs $pfgs): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pfgs $pfgs): bool
    {
        //
    }
}
