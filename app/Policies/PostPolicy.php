<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    public function create(User $user)
    {
        return $user->is_admin;
    }

    public function store(User $user)
    {
        return $user->is_admin && auth()->check();
    }

    public function update(User $user)
    {
        return $user->is_admin && auth()->check();
    }

    public function destroy(User $user)
    {
        return $user->is_admin && auth()->check();
    }
}