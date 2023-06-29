<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/leigh/OneDrive/PersonalSites/leighhowells.local/user/plugins/flex-objects/flex-objects.yaml',
    'modified' => 1585492788,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ],
        'directories' => [
            0 => 'blueprints://flex-objects/pages.yaml',
            1 => 'blueprints://flex-objects/user-accounts.yaml',
            2 => 'blueprints://flex-objects/user-groups.yaml'
        ]
    ]
];
