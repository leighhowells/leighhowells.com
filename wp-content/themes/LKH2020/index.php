<?php get_header(); ?>
<main id="content"><div class="page-width">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php get_template_part('entry'); ?><?php comments_template(); ?><?php endwhile; wp_reset_postdata(); endif; ?><?php get_template_part('nav', 'below'); ?>
</div></main>
<?php get_sidebar(); ?><?php get_footer(); ?>