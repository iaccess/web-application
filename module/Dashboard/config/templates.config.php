<?php

use Dashboard\View\Helper;
use Zend\ServiceManager\Factory\InvokableFactory;

$path = __DIR__ . '/../templates';

return [
    'view_manager' => [
        'layout'                => 'dashboard/layout',
        'template_map'          => [
            'dashboard/layout'                  => $path . '/layout/dashboard.phtml',
            'template/navigation/sidebar'       => $path . '/layout/template/navigation/sidebar.phtml',
            'template/navigation/header'        => $path . '/layout/template/navigation/header.phtml',
            'template/navigation/breadcrumbs'   => $path . '/layout/template/navigation/breadcrumbs.phtml',
            'partial/navigation/header'         => $path . '/layout/partial/navigation/header.phtml',
            'partial/navigation/sidebar'        => $path . '/layout/partial/navigation/sidebar.phtml',
            'partial/navigation/breadcrumbs'    => $path . '/layout/partial/navigation/breadcrumbs.phtml',
            'partial/footer'                    => $path . '/layout/partial/footer.phtml',

            'boxcar/small'                      => $path . '/layout/widget/boxcar/small.phtml'
        ],
        'template_path_stack'   => [
            'dashboard' => __DIR__ . '/../templates',
        ],
    ],
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
