<?php get_header(); ?>

        
        <div class="panel-darken"  >

            <div class="page-width">

                <div class="banner-title">
                    <h1><?php the_title(); ?></h1>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article >

                        <div class="article-meta">
                            <?php the_date('d M Y', '<time>', '</time>'); ?>
                        </div>

                        <div class="article-main">
                            <?php the_content(); ?>
                        </div>

                    </article>

                <?php endwhile; endif; ?>

            </div>
        </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>