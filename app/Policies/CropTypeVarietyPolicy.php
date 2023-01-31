<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CropTypeVariety;
use Illuminate\Auth\Access\HandlesAuthorization;

class CropTypeVarietyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the cropTypeVariety can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the cropTypeVariety can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropTypeVariety  $model
     * @return mixed
     */
    public function view(User $user, CropTypeVariety $model)
    {
        return true;
    }

    /**
     * Determine whether the cropTypeVariety can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the cropTypeVariety can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropTypeVariety  $model
     * @return mixed
     */
    public function update(User $user, CropTypeVariety $model)
    {
        return true;
    }

    /**
     * Determine whether the cropTypeVariety can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropTypeVariety  $model
     * @return mixed
     */
    public function delete(User $user, CropTypeVariety $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropTypeVariety  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the cropTypeVariety can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropTypeVariety  $model
     * @return mixed
     */
    public function restore(User $user, CropTypeVariety $model)
    {
        return false;
    }

    /**
     * Determine whether the cropTypeVariety can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropTypeVariety  $model
     * @return mixed
     */
    public function forceDelete(User $user, CropTypeVariety $model)
    {
        return false;
    }
}
