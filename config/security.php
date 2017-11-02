<?php

return [
    'providers' => [
        'active_directory' => [
            'class' => '',
            'entity' => [
                'class' => '',
                'property' => 'login'
            ]
        ]
    ],
    'firewalls' => [
        'main' => [
            'provider' => 'active_directory',
            'pattern' => '^\/',
            'form_login' => ''
        ]
    ]
];