<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/leigh/OneDrive/PersonalSites/leighhowells.local/user/plugins/admin/admin.yaml',
    'modified' => 1589217030,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => true,
        'theme' => 'grav',
        'logo_text' => '',
        'body_classes' => '',
        'content_padding' => true,
        'twofa_enabled' => true,
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets_display' => [
            'dashboard-maintenance' => true,
            'dashboard-statistics' => true,
            'dashboard-notifications' => true,
            'dashboard-feed' => true,
            'dashboard-pages' => true
        ],
        'pages' => [
            'show_parents' => 'both',
            'show_modular' => true
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true,
            'secure_delete' => false
        ],
        'edit_mode' => 'normal',
        'frontend_preview_target' => 'inline',
        'show_github_msg' => true,
        'pages_list_display_field' => 'title',
        'google_fonts' => false,
        'admin_icons' => 'line-awesome',
        'enable_auto_updates_check' => true,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => 30,
                'monthly' => 12,
                'visitors' => 20
            ]
        ]
    ]
];
