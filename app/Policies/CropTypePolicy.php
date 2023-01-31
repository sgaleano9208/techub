<?php

namespace App\Policies;

use App\Models\User;
use App\Models\CropType;
use Illuminate\Auth\Access\HandlesAuthorization;

class CropTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the cropType can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the cropType can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropType  $model
     * @return mixed
     */
    public function view(User $user, CropType $model)
    {
        return true;
    }

    /**
     * Determine whether the cropType can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the cropType can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropType  $model
     * @return mixed
     */
    public function update(User $user, CropType $model)
    {
        return true;
    }

    /**
     * Determine whether the cropType can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropType  $model
     * @return mixed
     */
    public function delete(User $user, CropType $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropType  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the cropType can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropType  $model
     * @return mixed
     */
    public function restore(User $user, CropType $model)
    {
        return false;
    }

    /**
     * Determine whether the cropType can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\CropType  $model
     * @return mixed
     */
    public function forceDelete(User $user, CropType $model)
    {
        return false;
    }
}
