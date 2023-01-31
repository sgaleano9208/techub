<?php

namespace App\Policies;

use App\Models\Crop;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CropPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the crop can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the crop can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Crop  $model
     * @return mixed
     */
    public function view(User $user, Crop $model)
    {
        return true;
    }

    /**
     * Determine whether the crop can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the crop can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Crop  $model
     * @return mixed
     */
    public function update(User $user, Crop $model)
    {
        return true;
    }

    /**
     * Determine whether the crop can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Crop  $model
     * @return mixed
     */
    public function delete(User $user, Crop $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Crop  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the crop can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Crop  $model
     * @return mixed
     */
    public function restore(User $user, Crop $model)
    {
        return false;
    }

    /**
     * Determine whether the crop can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Crop  $model
     * @return mixed
     */
    public function forceDelete(User $user, Crop $model)
    {
        return false;
    }
}
