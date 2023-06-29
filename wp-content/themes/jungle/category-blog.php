<?php get_header(); ?>

    <div class="pageContainer">

        <div class="page-width">

            <ul class="grid articleList">
                <div class="grid">

                <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>

                        <li class="articleList_item col-1/3">

                            <article class="article">

                                <?php $catquery = new WP_Query('cat=6  &posts_per_page=1'); ?>
                                <?php the_date('d M Y', '<time>', '</time>'); ?>
                                <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <?php the_field('excerpt'); ?>


                                <a href="<?php the_permalink() ?>" rel="bookmark">
                                    <div class="more"></div>
                                </a>

                            </article>

                        </li>


                <?php endwhile;
                endif; ?>

                </div>

       
                <?php wp_pagenavi(); ?>

            </ul>
        </div>
    </div>


<?php get_sidebar(); ?><?php get_footer(); ?>