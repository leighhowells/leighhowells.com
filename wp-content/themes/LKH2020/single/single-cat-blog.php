<?php get_header(); ?>

    <main id="content">
        <div class="panel-darken"  >


            <?php if ( has_tag('photoblog')  ) {    ?>


            <div class="page-width photoblog">
                <div class="banner-title">
                    <h1><?php the_title(); ?></h1>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="article-meta">
                                <?php the_date('d M Y', '<time>', '</time>'); ?>
                                <?php echo show_tags(); ?>
                            </div>
                    <?php endwhile; endif; ?>
                </div>

                <div class="text-width">
                    <?php the_content(); ?>
                </div>

            </div>





           <?php } else { ?>


                <div class="page-width">
                    <div class="banner-title">
                        <h1><?php the_title(); ?></h1>
                    </div>


                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article <?php post_class(); ?>>

                            <div class="article-meta">
                                <?php the_date('d M Y', '<time>', '</time>'); ?>
                                <?php echo show_tags(); ?>
                            </div>

                            <div class="article-main">
                                <?php the_content(); ?>
                            </div>

                        </article>

                    <?php endwhile; endif; ?>

                </div>



            <?php } ?>
            
        </div>
    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>