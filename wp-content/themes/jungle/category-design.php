<?php get_header(); ?>

<div class="pageContainer">
    <div class="page-width">

            <ul class="grid articleList">

                <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>

                    <div class="design-listing">
                        <div class="col-1/2">
                            <div class="inner">
                                <?php $catquery = new WP_Query('cat=6  &posts_per_page=1'); ?>

                                <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <?php the_date('F Y', '<time>', '</time>'); ?>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <div class="col-1/2">
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <div class="thumb"><?php the_post_thumbnail(); ?></div>
                            </a>
                        </div>
                    </div>


                <?php endwhile;
                endif; ?>
                
                <?php wp_pagenavi(); ?>
                
            </ul>
        
    </div>
</div>


<?php get_sidebar(); ?><?php get_footer(); ?>


