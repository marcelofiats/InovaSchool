<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RedirectTo
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

    public function permission(User $user){
        $permission = $user->permissao;
        switch($permission){
            case 'Administrador':
                return 'admin.index';
            case 'Diretor':
                return 'diretoria.home';
            case 'Professor':
                return 'professor.home';
            case 'Secretaria':
                return'secretaria.home';
            case 'Responsavel':
                return 'responsavel.home';
            default:
                return'web.index';
        }
    }

}
