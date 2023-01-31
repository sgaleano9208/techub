<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TreatmentReport;
use Illuminate\Auth\Access\HandlesAuthorization;

class TreatmentReportPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the treatmentReport can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatmentReport can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentReport  $model
     * @return mixed
     */
    public function view(User $user, TreatmentReport $model)
    {
        return true;
    }

    /**
     * Determine whether the treatmentReport can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatmentReport can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentReport  $model
     * @return mixed
     */
    public function update(User $user, TreatmentReport $model)
    {
        return true;
    }

    /**
     * Determine whether the treatmentReport can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentReport  $model
     * @return mixed
     */
    public function delete(User $user, TreatmentReport $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentReport  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the treatmentReport can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentReport  $model
     * @return mixed
     */
    public function restore(User $user, TreatmentReport $model)
    {
        return false;
    }

    /**
     * Determine whether the treatmentReport can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TreatmentReport  $model
     * @return mixed
     */
    public function forceDelete(User $user, TreatmentReport $model)
    {
        return false;
    }
}
