<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://diver/diver.yaml',
    'modified' => 1524395591,
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
                        0 => 'user/themes/diver',
                        1 => 'user/themes/base'
                    ]
                ]
            ]
        ]
    ]
];
