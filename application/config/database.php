<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost:3306',
            'database' => 'thomas-alba',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
