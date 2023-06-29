<?php get_header(); ?>


    <div id="page-wrapper" class="page-width">
        <div id="page">
            <div class="grid-flexbox">

                <div class="article">
                    <article class="article home">

                        <div>
                            <a class="recent" href="<?php echo get_site_url(); ?>/articles">WRITING</a>
                            <?php $catquery = new WP_Query('cat=2&posts_per_page=1'); ?>
                            <?php while ($catquery->have_posts()) :
                            $catquery->the_post(); ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark"><h2><?php the_title(); ?></h2></a>
                            <?php the_date('d M Y', '<time>', '</time>'); ?>
                            <?php the_field('excerpt'); ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <div class="more"></div>
                            </a>
                        </div>
                        <div>
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <div class="thumb"><?php the_post_thumbnail(); ?></div>
                            </a>

                        </div>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>

                    </article>
                </div>


                <div class="article">
                    <article class="article home">
                        <a class="recent" href="<?php echo get_site_url(); ?>/design">DESIGNS</a>
                        <?php $catquery = new WP_Query('cat=6&posts_per_page=1'); ?>
                        <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>

                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2><a href="<?php the_permalink() ?>" rel="bookmark">
                                <div class="thumb"><?php the_post_thumbnail(); ?></div>
                            </a>
                           <p> <?php the_field('excerpt'); ?> </p>

                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                    </article>
                </div>


                <div class="article">
                    <article class="article home">

                        <a class="recent" href="<?php echo get_site_url(); ?>/music">MUSIC</a>
                        <?php $catquery = new WP_Query('cat=13&posts_per_page=1'); ?>
                        <div class="thumb"><?php the_post_thumbnail(); ?></div>
                        <?php while ($catquery->have_posts()) :
                            $catquery->the_post(); ?>
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?>  </p>
                        <?php echo do_shortcode('[sonaar_audioplayer]'); ?> <?php echo do_shortcode('[sonaar_audioplayer]'); ?>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>

                    </article>
                </div>

            </div>
        </div>
    </div>


<?php get_footer(); ?>