<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/users/serverpilot/apps/ddp/public/user/config/plugins/email(1).yaml',
    'modified' => 1542837468,
    'data' => [
        'enabled' => true,
        'from' => 'info@ddp-transporte.ch',
        'from_name' => 'DD Pasuljanovic Transporte',
        'to' => [
            0 => 'info@ddp-transporte.ch',
            1 => 'g.strainovic@gmail.com'
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'mail.infomaniak.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'info@ddp-transporte.ch',
                'password' => 'gytesPXJCEPV'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
