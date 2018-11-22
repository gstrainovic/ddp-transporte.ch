<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/users/serverpilot/apps/gravcms/public/dd/user/config/plugins/email.yaml',
    'modified' => 1541497418,
    'data' => [
        'enabled' => true,
        'from' => 'info@buegelt.ch',
        'from_name' => 'Goran strainovic',
        'to' => [
            0 => 'info@buegelt.ch',
            1 => 'g.strainovic@gmail.com'
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'mail.infomaniak.com',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'info@buegelt.ch',
                'password' => 'bgltWidgigl?1'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
