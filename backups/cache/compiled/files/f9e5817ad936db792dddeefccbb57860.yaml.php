<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://jungle/jungle.yaml',
    'modified' => 1590644358,
    'data' => [
        'enabled' => true,
        'default_lang' => 'en',
        'dropdown' => [
            'enabled' => false
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user/themes/jungle',
                        1 => 'user/themes/base'
                    ]
                ]
            ]
        ]
    ]
];
