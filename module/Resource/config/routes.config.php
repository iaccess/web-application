<?php

/**
 * Sample Application Route
 *
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 *
 */

use Zend\Router\Http\Literal;
use Resource\Controller;

return [
    'resources'  => [
        'type'          => Literal::class,
        'options'       => [
            'route'     => '/resources',
            'defaults'   => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'index'
            ]
        ],
        'my_terminate'  => true,
        'child_routes'  => [
            /**
             * Personnel Routes
             */
            'personnels'        => [
                'type'          => Literal::class,
                'options'       => [
                    'route'     => '/personnels',
                    'defaults'  => [
                        'controller'    => Controller\PersonnelController::class,
                        'action'        => 'show-personnels'
                    ]
                ],
                'may_terminate' => true,
                'child_routes'  => [
                    'faculties' => [
                        'type'          => Literal::class,
                        'options'       => [
                            'route'     => '/faculties',
                            'defaults'  => [
                                'action'    => 'show-faculties'
                            ]
                        ],
                        'may_terminate' => false
                    ],
                    'staffs'    => [
                        'type'          => Literal::class,
                        'options'       => [
                            'route'     => '/staffs',
                            'defaults'  => [
                                'action'    => 'show-staffs'
                            ]
                        ],
                        'may_terminate' => false
                    ]
                ]
            ],
            /**
             * Premises Routes
             */
            'premises'          => [
                'type'          => Literal::class,
                'options'       => [
                    'route'     => '/premises',
                    'defaults'  => [
                        'controller'    => Controller\PremiseController::class,
                        'action'        => 'show-premises'
                    ]
                ],
                'may_terminate' => true,
                'child_routes'  => [
                    'offices' => [
                        'type'          => Literal::class,
                        'options'       => [
                            'route'     => '/offices',
                            'defaults'  => [
                                'action'    => 'show-offices'
                            ]
                        ],
                        'may_terminate' => false
                    ],
                    'facilities'    => [
                        'type'          => Literal::class,
                        'options'       => [
                            'route'     => '/facilities',
                            'defaults'  => [
                                'action'    => 'show-facilities'
                            ]
                        ],
                        'may_terminate' => false
                    ]
                ]
            ],
        ]
    ]
 ];
