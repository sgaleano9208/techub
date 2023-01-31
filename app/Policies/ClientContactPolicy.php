<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ClientContact;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientContactPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the clientContact can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the clientContact can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientContact  $model
     * @return mixed
     */
    public function view(User $user, ClientContact $model)
    {
        return true;
    }

    /**
     * Determine whether the clientContact can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the clientContact can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientContact  $model
     * @return mixed
     */
    public function update(User $user, ClientContact $model)
    {
        return true;
    }

    /**
     * Determine whether the clientContact can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientContact  $model
     * @return mixed
     */
    public function delete(User $user, ClientContact $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientContact  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the clientContact can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientContact  $model
     * @return mixed
     */
    public function restore(User $user, ClientContact $model)
    {
        return false;
    }

    /**
     * Determine whether the clientContact can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientContact  $model
     * @return mixed
     */
    public function forceDelete(User $user, ClientContact $model)
    {
        return false;
    }
}
