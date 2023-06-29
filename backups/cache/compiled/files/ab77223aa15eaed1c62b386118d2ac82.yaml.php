<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/leigh/OneDrive/PersonalSites/leighhowells.local/user/themes/jungle/blueprints.yaml',
    'modified' => 1524392919,
    'data' => [
        'name' => 'Jungle',
        'version' => '2.0.0',
        'description' => 'In a jungle with funny creatures',
        'icon' => 'empire',
        'author' => [
            'name' => 'Leigh',
            'email' => 'leigh.howells@gmail.com',
            'url' => 'http://www.leighhowells.com'
        ],
        'homepage' => 'http://www.leighhowells.com',
        'demo' => NULL,
        'keywords' => 'leigh, theme, jungle',
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
