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
use Membership\Controller;

return [
    'membership' => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/members',
            'defaults'  => [
                'controller'    => Controller\IndexController::class,
                'action'        => 'index'
            ]
        ]
    ]
 ];
