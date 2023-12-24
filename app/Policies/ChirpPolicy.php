<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chirp;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChirpPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAny(User $user):bool
    {
        //
    }

    public function update(User $user,Chirp $chirp):bool
    {
        return $chirp->user()->is($user);
    }

    public function delete(User $user, Chirp $chirp):bool
    {
        return $this->update($user , $chirp);
    }

}
