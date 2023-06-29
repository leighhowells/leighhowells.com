<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/leigh/OneDrive/PersonalSites/leighhowells.local/user/themes/base/blueprints.yaml',
    'modified' => 1524391995,
    'data' => [
        'name' => 'Base',
        'version' => '2.0.0',
        'description' => 'Leigh\'s base theme',
        'icon' => 'empire',
        'author' => [
            'name' => 'Leigh',
            'email' => 'leigh.howells@gmail.com',
            'url' => 'http://www.leighhowells.com'
        ],
        'homepage' => 'http://www.leighhowells.com',
        'demo' => NULL,
        'keywords' => 'leigh, theme',
        'bugs' => NULL,
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
