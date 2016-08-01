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
use Accounting\Controller;

return [
    'accounting' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/accounting',
            'defaults'  => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'index'
            ]
        ]
    ]
 ];
