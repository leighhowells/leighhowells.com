<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u323080344/domains/leighhowells.com/public_html/user/plugins/readingtime/blueprints.yaml',
    'modified' => 1590644320,
    'data' => [
        'name' => 'Reading Time',
        'version' => '1.3.0',
        'description' => 'Add human readable reading time to your pages.',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-readingtime',
        'demo' => 'http://www.getgrav.org/blog',
        'keywords' => 'readingtime, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-readingtime/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'words_per_minute' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'append' => 'wpm',
                    'label' => 'Words-per-minute',
                    'validate' => [
                        'type' => 'int',
                        'min' => 1,
                        'max' => 1000
                    ]
                ],
                'format' => [
                    'type' => 'text',
                    'label' => 'Format',
                    'size' => 'large'
                ],
                'round' => [
                    'type' => 'select',
                    'size' => 'small',
                    'classes' => 'fancy',
                    'label' => 'Round to nearest...',
                    'options' => [
                        'seconds' => 'second',
                        'minutes' => 'minute'
                    ]
                ]
            ]
        ]
    ]
];
