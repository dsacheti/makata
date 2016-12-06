<?php

return [
    'dependencies' => [
        'invokables' => [
            Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\AuraRouter::class,
            MKapp\Action\PingAction::class => MKapp\Action\PingAction::class,
            MKapp\Action\TestePageAction::class => MKapp\Action\TestePageAction::class,
        ],
        'factories' => [
            MKapp\Action\HomePageAction::class => MKapp\Action\HomePageFactory::class,
        ],
    ],

    'routes' => [
        [
            'name' => 'home',
            'path' => '/',
            'middleware' => MKapp\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'api.ping',
            'path' => '/api/ping',
            'middleware' => MKapp\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name' => 'teste',
            'path' => '/teste',
            'middleware' => MKapp\Action\TestePageAction::class,
            'allowed_methods' => ['GET'],
        ],
    ],
];
