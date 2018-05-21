<?php

namespace App\Policies;

use App\Entity\Users;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(Users $currentUser, Users $user)
    {
        return $currentUser->user_id === $user->user_id;
    }
}
