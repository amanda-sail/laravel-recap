<?php

namespace App\Policies;

use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsletterPolicy
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

    public function create(User $user)
    {
        return in_array($user->role_id, [1, 2]);
    }
    public function update(User $user, Subscribe $subscribe)
    {
        return in_array($user->role_id, [1, 2]);
    }
    public function delete(User $user, Subscribe $subscribe)
    {
        return $user->role_id === 1;
    }
}
