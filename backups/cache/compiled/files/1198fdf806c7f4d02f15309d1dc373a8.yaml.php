<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/leigh/OneDrive/PersonalSites/leighhowells.local/user/plugins/advanced-pagecache/advanced-pagecache.yaml',
    'modified' => 1580821097,
    'data' => [
        'enabled' => true,
        'disabled_with_params' => true,
        'disabled_with_query' => true,
        'disabled_extensions' => [
            0 => 'rss',
            1 => 'xml',
            2 => 'json'
        ],
        'whitelist' => [
            0 => '/cache-this-page'
        ],
        'blacklist' => [
            0 => '/error',
            1 => '/random',
            2 => '/dont-cache-this-page'
        ]
    ]
];
