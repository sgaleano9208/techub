<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ClientAddress;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientAddressPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the clientAddress can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the clientAddress can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientAddress  $model
     * @return mixed
     */
    public function view(User $user, ClientAddress $model)
    {
        return true;
    }

    /**
     * Determine whether the clientAddress can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the clientAddress can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientAddress  $model
     * @return mixed
     */
    public function update(User $user, ClientAddress $model)
    {
        return true;
    }

    /**
     * Determine whether the clientAddress can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientAddress  $model
     * @return mixed
     */
    public function delete(User $user, ClientAddress $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientAddress  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the clientAddress can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientAddress  $model
     * @return mixed
     */
    public function restore(User $user, ClientAddress $model)
    {
        return false;
    }

    /**
     * Determine whether the clientAddress can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ClientAddress  $model
     * @return mixed
     */
    public function forceDelete(User $user, ClientAddress $model)
    {
        return false;
    }
}
