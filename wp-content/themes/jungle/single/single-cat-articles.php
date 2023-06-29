<?php get_header(); ?>

    <div class="pageContainer">
        <div class="page-width">
            <div id="page">
                <div id="item" class="block">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article <?php post_class(); ?> class="article article-full">

                            <div class="banner-title">
                                <h1 class="article_heading"><?php the_title(); ?></h1>
                            </div>


                            <div class="article_date">
                                <?php the_date('d M Y', '<time>', '</time>'); ?>
                                <?php the_tags( '<span class="tags">', '&nbsp;', '</span>' ); ?>
                            </div>

                            <div class="article-main">
                                <?php the_content(); ?>
                            </div>


                        </article>

                    <?php endwhile; endif; ?>

                </div>
            </div>
        </div>
    </div>

<?php get_sidebar(); ?><?php get_footer(); ?>