<?php

namespace App\Policies;

use App\Models\PencapaianPelatih;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PencapaianPelatihPolicy
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
    public function view(User $user, PencapaianPelatih $pencapaianPelatih): bool
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
    public function update(User $user, PencapaianPelatih $pencapaianPelatih): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PencapaianPelatih $pencapaianPelatih): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PencapaianPelatih $pencapaianPelatih): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PencapaianPelatih $pencapaianPelatih): bool
    {
        //
    }
}
