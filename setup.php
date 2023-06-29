<?php
/**
 * Multisite setup for sub-directories or path based
 * URLs for subsites.
 *
 * DO NOT EDIT UNLESS YOU KNOW WHAT YOU ARE DOING!
 */

use Grav\Common\Filesystem\Folder;

// Get relative path from Grav root.
$path = isset($_SERVER['PATH_INFO'])
    ? $_SERVER['PATH_INFO']
    : Folder::getRelativePath($_SERVER['REQUEST_URI'], dirname($_SERVER['SCRIPT_NAME']));
$path = preg_replace('|[?#].*$|', '', $path);

// Extract name of subsite from path
$name = Folder::shift($path);
$folder = "/sites/{$name}";
$prefix = "/{$name}";

if (!$name || !is_dir(str_replace('//', '/', ROOT_DIR . "user/{$folder}"))) {
	return [];
}


// Prefix all pages with the name of the subsite

$container['pages']->base($prefix);
return [
    'environment' => $name,
    'streams' => [
        'schemes' => [
            'user' => [
                'type' => 'ReadOnlyStream',
                'prefixes' => [
                    '' => ["/user/{$folder}"],
                ]
            ]
        ]
    ]
];

