<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TreatmentPass;
use Illuminate\Auth\Access\HandlesAuthorization;

class TreatmentPassPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the treatmentPass can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatmentPass can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentPass  $model
     * @return mixed
     */
    public function view(User $user, TreatmentPass $model)
    {
        return true;
    }

    /**
     * Determine whether the treatmentPass can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatmentPass can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentPass  $model
     * @return mixed
     */
    public function update(User $user, TreatmentPass $model)
    {
        return true;
    }

    /**
     * Determine whether the treatmentPass can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentPass  $model
     * @return mixed
     */
    public function delete(User $user, TreatmentPass $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentPass  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatmentPass can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentPass  $model
     * @return mixed
     */
    public function restore(User $user, TreatmentPass $model)
    {
        return false;
    }

    /**
     * Determine whether the treatmentPass can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentPass  $model
     * @return mixed
     */
    public function forceDelete(User $user, TreatmentPass $model)
    {
        return false;
    }
}
