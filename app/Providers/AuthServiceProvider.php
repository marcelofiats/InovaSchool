<?php

namespace App\Providers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

         Gate::define('is_admin', function(User $user){
             return $user->permissao == "Administrador";
         });

         Gate::define('is_diretor', function(User $user){
             return $user->permissao == "Diretor";
         });

         Gate::define('is_professor', function(user $user){
             return $user->permissao == "Professor";
         });

         Gate::define('is_secretaria', function(user $user){
             return $user->permissao == "Secretaria";
         });

         Gate::define('is_responsavel', function(user $user){
             return $user->permissao == "Responsavel";
         });
    }
}
