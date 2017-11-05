<?php

return [
    'providers' => [
        'active_directory' => [
            'class' => '\\Racine\\Security\\Authentication\\Provider\\ActiveDirectoryAuthenticationProvider',
            'entity' => [
                'class' => '\\Racine\\Security\\User',
                'property' => 'login'
            ],
            'url' => 'http://10.242.70.229:28080/ci.orange.ldap/ldapWSService'
        ]
    ],
    /*'firewall' => [
        'provider' => 'active_directory',
        'pattern' => '^\/',
        'form_login' => [
            'check_path' => '/login.php',
            'login_path' => '/login.php',
        ]
    ]*/
];