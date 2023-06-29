<?php
add_action('acf/init', 'wpahead_acf_init');
function wpahead_acf_init()
{
    // Check if the register block function exists (If ACF is active)
    if (function_exists('acf_register_block')) {
        acf_register_block(array(
            'name' => 'block-imagetextbox',
            'title' => __('Leigh Fat Image Block'),
            'description' => __('A block for showing big images with text'),
            'render_callback' => 'wpahead_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'heart',
            'keywords' => array('recommendation', 'link'),
            'align' => 'full',
            'enqueue_assets' => function () {
                wp_enqueue_style('image-text-box', get_template_directory_uri() . '/blocks/blocks.css', array(), '1.0.0');
            },
        ));
    }
}
?><?php

function wpahead_acf_block_render_callback($block) {
    $name = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/blocks/{$name}.php"))) {
        include(get_theme_file_path("/blocks/{$name}.php"));
    }
}
?>