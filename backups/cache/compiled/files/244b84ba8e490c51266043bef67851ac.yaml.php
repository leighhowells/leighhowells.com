<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/leigh/OneDrive/PersonalSites/leighhowells.local/user/themes/twentyeighteen/blueprints.yaml',
    'modified' => 1531298948,
    'data' => [
        'name' => 'twentyeighteen',
        'version' => '2.0.0',
        'description' => '',
        'icon' => 'empire',
        'author' => [
            'name' => 'Leigh',
            'email' => 'leigh.howells@gmail.com',
            'url' => 'http://www.leighhowells.com'
        ],
        'homepage' => 'http://www.leighhowells.com',
        'demo' => NULL,
        'keywords' => 'leigh, theme, twentyeighteen',
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
