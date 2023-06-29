<?php
add_action('after_setup_theme', 'jungle_setup');
function jungle_setup()
{
    load_theme_textdomain('jungle', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'jungle')));
}

add_action('wp_enqueue_scripts', 'jungle_load_scripts');
function jungle_load_scripts()
{
    wp_enqueue_style('jungle-style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_register_script('jungle', get_template_directory_uri() . '/js/jungle.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jungle');
}


add_action('wp_footer', 'jungle_footer_scripts');
function jungle_footer_scripts()
{
    ?>

    <script>
        jQuery(document).ready(function ($) {
            var deviceAgent = navigator.userAgent.toLowerCase();
            if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
                $("html").addClass("ios");
                $("html").addClass("mobile");
            }
            if (navigator.userAgent.search("MSIE") >= 0) {
                $("html").addClass("ie");
            } else if (navigator.userAgent.search("Chrome") >= 0) {
                $("html").addClass("chrome");
            } else if (navigator.userAgent.search("Firefox") >= 0) {
                $("html").addClass("firefox");
            } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                $("html").addClass("safari");
            } else if (navigator.userAgent.search("Opera") >= 0) {
                $("html").addClass("opera");
            }
        });
    </script>

    <?php
}


add_filter('document_title_separator', 'jungle_document_title_separator');
function jungle_document_title_separator($sep)
{
    $sep = '|';
    return $sep;
}


add_filter('the_title', 'jungle_title');
function jungle_title($title)
{
    if ($title == '') {
        return '...';
    } else {
        return $title;
    }
}


add_filter('the_content_more_link', 'jungle_read_more_link');
function jungle_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">...</a>';
    }
}

add_filter('excerpt_more', 'jungle_excerpt_read_more_link');
function jungle_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">...</a>';
    }
}

add_filter('intermediate_image_sizes_advanced', 'jungle_image_insert_override');
function jungle_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    return $sizes;
}

add_action('widgets_init', 'jungle_widgets_init');
function jungle_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area', 'jungle'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('wp_head', 'jungle_pingback_header');
function jungle_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('comment_form_before', 'jungle_enqueue_comment_reply_script');
function jungle_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function jungle_custom_pings($comment)
{

?>


    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>

<?php
}


add_filter('get_comments_number', 'jungle_comment_count', 0);
function jungle_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

?>


<?php
// Custom single template by category
// https://halgatewood.com/wordpress-custom-single-templates-by-category

add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template($t)
{
    foreach ((array)get_the_category() as $cat) {
        if (file_exists(STYLESHEETPATH . "/single/single-cat-{$cat->slug}.php")) return STYLESHEETPATH . "/single/single-cat-{$cat->slug}.php";
        if ($cat->parent) {
            $cat = get_the_category_by_ID($cat->parent);
            if (file_exists(STYLESHEETPATH . "/single/single-cat-{$cat->slug}.php")) return STYLESHEETPATH . "/single/single-cat-{$cat->slug}.php";
        }
    }
    return $t;
}

?>


<?php
// REWRITE TO THE GET_EXCERPT FUNCTION - TO INCLUDE BLOCK QUOTES ETC.
function wpse_allowedtags()
{
// Add custom tags to this string
    return '<figcaption>,<blockquote>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>';
}

if (!function_exists('wpse_custom_wp_trim_excerpt')) :

    function wpse_custom_wp_trim_excerpt($wpse_excerpt)
    {
        global $post;
        $raw_excerpt = $wpse_excerpt;
        if ('' == $wpse_excerpt) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes($wpse_excerpt);
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags());

            //Set the excerpt word count and only break after sentence is complete.
            $excerpt_word_count = 45;
            $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
            $tokens = array();
            $excerptOutput = '';
            $count = 0;

            // Divide the string into tokens; HTML tags, or words, followed by any whitespace
            preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

            foreach ($tokens[0] as $token) {

                if ($count >= $excerpt_word_count && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
                    // Limit reached, continue until , ; ? . or ! occur at the end
                    $excerptOutput .= trim($token);
                    break;
                }

                // Add words to complete sentence
                $count++;

                // Append what's left of the token
                $excerptOutput .= $token;
            }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

            $excerpt_end = ' <a class="more" href="' . esc_url(get_permalink()) . '"></a>';
            $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

            //$pos = strrpos($wpse_excerpt, '</');
            //if ($pos !== false)
            // Inside last HTML tag
            //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
            //else
            // After the content
            $wpse_excerpt .= $excerpt_end; /*Add read more in new paragraph */

            return $wpse_excerpt;

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');

?>


<?php function show_tags(){
    $post_tags = get_the_tags();
    $separator = ' | ';
    echo '<ul class="tags">';
    if (!empty($post_tags)) {
        foreach ($post_tags as $tag) {
            $output = '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>' . $separator;
        }
        return trim($output, $separator);
    }
    echo '</ul>';
}





// add category nicenames in body class
function category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
        $classes[] = $category->category_nicename;
    return $classes;
}

add_filter('body_class', 'category_id_class');
?>

<?php
function pagination_bar()
{
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

?>


<?php
function pagination_nav()
{
    global $wp_query;

    if ($wp_query->max_num_pages > 1) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link('&larr; Older posts'); ?></div>
            <div class="nav-next"><?php previous_posts_link('Newer posts &rarr;'); ?></div>
        </nav>
    <?php }
}

?>


<?php
// REGISTER SUPPORT FOR GUTENBER WIDE IMAGES IN THEME
function mytheme_setup()
{
    add_theme_support('align-wide');
}

add_action('after_setup_theme', 'mytheme_setup');
?>



<?php require_once trailingslashit(get_stylesheet_directory()) . 'blocks/acf-blocks.php'; ?>



<?php  ////  **** DISPLAY TEMPLATE NAME AT TOP OF PAGE //
//add_action('wp_head', 'show_template');
//function show_template() {
//    global $template;
//   echo basename($template);
//}
//    ?>
