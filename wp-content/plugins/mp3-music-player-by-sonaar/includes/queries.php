<?php
/**
 * Get Artist
 */
    function sr_plugin_elementor_select_artist(){
        $sr_artist_list = get_posts(array(
            'post_type' => 'artist',
            'showposts' => 999,
        ));
        $options = array();

        if ( ! empty( $sr_artist_list ) && ! is_wp_error( $sr_artist_list ) ){
            foreach ( $sr_artist_list as $post ) {
                $options[ $post->ID ] = $post->post_title;
            }
        } else {
            $options[0] = esc_html__( 'Create an Artist First', 'sonaar-music' );
        }
        return $options;
    }

/**
 * Get Category
 */

function srp_elementor_select_category(){
    $taxonomies = array('playlist-category');

    if (defined( 'WC_VERSION' )){
        array_push($taxonomies, 'product_cat');
    }
    if ( Sonaar_Music::get_option('player_type', 'srmp3_settings_general') == 'podcast' ){
        array_push($taxonomies, 'podcast-show');
    }
    $args = array(
        'taxonomy'=> $taxonomies,
    );
    $sr_category_list = get_terms( $args );
    $options = array();
    if ( ! empty( $sr_category_list ) && ! is_wp_error( $sr_category_list ) ){
        foreach ( $sr_category_list as $category ) {
            $options[ $category->term_id] = $category->name;
            
        }
    } else {
        $options[0] = esc_html__( 'Create a Category First', 'elementor-sonaar' );
    }
    
    return $options;
}

/**
 * Get Music Playlist
 */

    function sr_plugin_elementor_select_playlist(){
        $sr_playlist_list = get_posts(array(
            'post_type' => ( Sonaar_Music::get_option('srmp3_posttypes', 'srmp3_settings_general') != null ) ? Sonaar_Music::get_option('srmp3_posttypes', 'srmp3_settings_general') : SR_PLAYLIST_CPT,//array(SR_PLAYLIST_CPT, 'post', 'product'),
            'post_status' => 'publish',
            'showposts' => 999,
        ));
        $options = array();

        if ( ! empty( $sr_playlist_list ) && ! is_wp_error( $sr_playlist_list ) ){
            foreach ( $sr_playlist_list as $post ) {
                if (Sonaar_Music::srmp3_check_if_audio($post)){
                    $options[ $post->ID ] = '['.$post->post_type .'] ' . $post->post_title;     
                }
            }
        } else {
            $options[0] = esc_html__( 'Create a Playlist First', 'sonaar-music' );
        }
        return $options;
    }

/**
 * Get Latest Published Post
 */
    function sr_plugin_elementor_getLatestPost($posttype){
        $arg = wp_get_recent_posts(array('post_type'=>$posttype, 'post_status' => 'publish', 'numberposts' => 1));
        if (!empty($arg)){
            return $arg[0]["ID"];
        }
    }