<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Auth\Access\HandlesAuthorization;

class LoginPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function isAdmin(User $user)
    {
        return $user->permissao == "Administrador";
    }
}
