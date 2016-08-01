<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'layout'                    => 'layout/layout',
        'template_map' => [
            'layout/layout'             => __DIR__ . '/../templates/layout/default.phtml',
            'site/layout'               => __DIR__ . '/../templates/layout/default.phtml',
            'partial/header'            => __DIR__ . '/../templates/layout/partial/header.phtml',
            'partial/footer'            => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'widget/banner/footer'      => __DIR__ . '/../templates/layout/widget/banner/footer.phtml',
            'template/navigation'       => __DIR__ . '/../templates/layout/template/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../templates/layout/template/breadcrumbs.phtml',
            'error/404'                 => __DIR__ . '/../templates/error/404.phtml',
            'error/index'               => __DIR__ . '/../templates/error/index.phtml',
        ],
        'template_path_stack' => [
            'site' => __DIR__ . '/../templates',
        ],
    ],
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
