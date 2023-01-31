<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Treatment;
use Illuminate\Auth\Access\HandlesAuthorization;

class TreatmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the treatment can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatment can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Treatment  $model
     * @return mixed
     */
    public function view(User $user, Treatment $model)
    {
        return true;
    }

    /**
     * Determine whether the treatment can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatment can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Treatment  $model
     * @return mixed
     */
    public function update(User $user, Treatment $model)
    {
        return true;
    }

    /**
     * Determine whether the treatment can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Treatment  $model
     * @return mixed
     */
    public function delete(User $user, Treatment $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Treatment  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatment can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Treatment  $model
     * @return mixed
     */
    public function restore(User $user, Treatment $model)
    {
        return false;
    }

    /**
     * Determine whether the treatment can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Treatment  $model
     * @return mixed
     */
    public function forceDelete(User $user, Treatment $model)
    {
        return false;
    }
}
