<?php get_header(); ?>

    <div class="panel-darken">

    <div class="page-width">

        <div class="banner-title">
            <h1>Blog</h1>
        </div>


        <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>


            <div class="panel-container">
                <div>

                    <?php $catquery = new WP_Query('cat=6  &posts_per_page=1'); ?>

                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    <?php the_date('d M Y', '<time>', '</time>'); ?>
                    <?php the_field('excerpt'); ?>
                </div>
                <div>
                    <a href="<?php the_permalink() ?>" rel="bookmark"><div class="thumb"><?php the_post_thumbnail(); ?></div></a>
                </div>


            </div>

        <?php endwhile;
        endif; ?>
    </div>


<?php get_sidebar(); ?><?php get_footer(); ?>