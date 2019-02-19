<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => '@db.hosts',
                    'user' =>'@db.username',
                    'password' => '@db.password',
                    'dbname' => '@db.dbname'
                ],
            ]
        ],
    ],
];
