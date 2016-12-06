<?php

/* 
 * Criado no NetBeans
 * por Dalcinei Sacheti
 * dalcinei@gmail.com
 * pode usar este arquivo, mas deixe este cabeçalho
 */

return [
    'doctrine'=>[
        'connection' => [
            'orm_default'=> [
                'driverClass' =>'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'homestead',
                    'password' =>'secret',
                    'dbname' => 'bd_email_makata',
                    'driverOptions'=>[
                        \PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES 'UTF8'"
                    ]
                ]
            ]
        ],
        'driver' => [
            'MKapp_driver' => [
                //'class' => 'Doctrine\ORM\Mapping\Driver\YamlDriver',
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__.'/../../src/MKapp/Entity',
                    //__DIR__ . '/../../src/MKapp/Infrastructure/Persistence/Doctrine/ORM'
                ]
            ],
            'orm_default' => [
                'drivers' => [
                    'MKapp\Entity' => 'MKapp_driver'
                ]
            ]
            
                
        ]
    ]
];