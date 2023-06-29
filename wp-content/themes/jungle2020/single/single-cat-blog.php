<?php get_header(); ?>


    <div class="page-width">

        <div id="page">

            <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>


            <div class="banner-title">
                <h1 class="likearticles"><?php the_title(); ?></h1>
            </div>

            <div class="article-meta">
                <?php the_date('d M Y', '<time>', '</time>'); ?><?php echo show_tags(); ?>
            </div>

            <div class="article-main">
                <?php the_content(); ?>
            </div>
        </div>


        <?php endwhile;
        endif; ?>

    </div>




<?php get_sidebar(); ?>

<?php get_footer(); ?>