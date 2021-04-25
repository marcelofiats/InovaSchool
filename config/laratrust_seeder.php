<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'admin' => 'c,r,u,d',
            'diretor' => 'c,r,u,d',
            'secretaria' => 'c,r,u,d',
            'professor' => 'c,r,u,d',
            'aluno' => 'c,r,u,d',
            'responsavel' => 'c,r,u,d',
        ],
        'diretor' => [
            'admin' => 'r',
            'diretor' => 'c,r,u,d',
            'secretaria' => 'c,r,u,d',
            'professor' => 'c,r,u,d',
            'aluno' => 'c,r,u',
            'responsavel' => 'c,r,u,d',
        ],
        'secretaria' => [
            'secretaria' => 'c,r,u,d',
            'professor' => 'c,r,u,d',
            'aluno' => 'c,r,u',
            'responsavel' => 'c,r,u,d',
        ],
        'professor' => [
            'aluno' => 'r,u',
            'responsavel' => 'c,r,u,d',
        ],
        'responsavel' => [
            'diretor' => 'r',
            'secretaria' => 'r',
            'professor' => 'r',
            'aluno' => 'r',
        ],

    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
