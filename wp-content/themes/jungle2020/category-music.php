<?php get_header(); ?>

    <div class="pageContainer">

        <div class="page-width">

            <ul class="grid articleList">

                <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>

                    <div class="col-1/2">

                        <li class="articleList_item">

                            <article class="article">


                                <div class="grid grid-spaced">
                                    <?php $catquery = new WP_Query('cat=6  &posts_per_page=1'); ?>
                                    <time><?php the_date('Y', '', ''); ?></time>
                                    <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                                    <div class="col-1/4">
                                        <a href="<?php the_permalink() ?>" rel="bookmark"><div class="thumb"><?php the_post_thumbnail(); ?></div></a>
                                    </div>
                                    
                                    <div class="col-3/4">


                                        <?php the_field('excerpt'); ?>
                                      

                                        <a href="<?php the_permalink() ?>" rel="bookmark">
                                            <div class="more"></div>
                                        </a>
                                    </div>



                                </div>


                            </article>

                        </li>

                    </div>



                <?php endwhile;
                endif; ?>

                <?php pagination_nav(); ?>

            </ul>
        </div>
    </div>


<?php get_sidebar(); ?><?php get_footer(); ?>