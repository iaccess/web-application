<?php

/**
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 */

use Zend\Router\Http\Literal;
use Site\Controller;

return [
    'home' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'        => 'index'
            ]
        ]
    ],
    'about' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/about',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'        => 'about'
            ]
        ]
    ],
    'contact-us' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/contact-us',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'        => 'contact-us'
            ]
        ]
    ],
    'academics' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/academics',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'        => 'academics'
            ]
        ]
    ],
    'news' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/news',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'        => 'news'
            ]
        ]
    ]
];
