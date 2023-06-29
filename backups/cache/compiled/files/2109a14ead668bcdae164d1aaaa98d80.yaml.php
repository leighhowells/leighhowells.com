<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://space/space.yaml',
    'modified' => 1524396559,
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
                        0 => 'user/themes/space',
                        1 => 'user/themes/base'
                    ]
                ]
            ]
        ]
    ]
];
