<?php

return [
    'layout'       => 'ui::layouts.public.full',
    'captcha'      => false,
    'identifier'   => 'email',
    'login'        => [
        'implementation' => \Laravolt\Auth\DefaultLogin::class,
    ],
    'registration' => [
        'enable'         => true,
        'status'         => 'ACTIVE',
        'implementation' => \Laravolt\Auth\DefaultUserRegistrar::class,
    ],
    'activation'   => [
        'enable'        => false,
        'status_before' => 'PENDING',
        'status_after'  => 'ACTIVE',
    ],
    'cas'          => [
        'enable' => false,
    ],
    'ldap'         => [
        'enable'   => false,
        'resolver' => [
            'ldap_user'     => \Laravolt\Auth\Services\Resolvers\LdapUserResolver::class,
            'eloquent_user' => \Laravolt\Auth\Services\Resolvers\EloquentUserResolver::class,
        ],
    ],
    'router'       => [
        'middleware' => ['web'],
        'prefix'     => 'auth',
    ],
    'redirect'     => [
        'after_login'          => '/home',
        'after_register'       => '/home',
        'after_reset_password' => '/home',

        // WARNING: after_logout redirection only valid for Laravel >= 5.7
        'after_logout'         => '/',
    ],

    // Whether to auto load migrations or not.
    // If set to false, then you must publish the migration files first before running the migrate command
    'migrations' => true,
];
