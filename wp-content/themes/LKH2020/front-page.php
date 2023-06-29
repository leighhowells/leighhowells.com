<?php get_header(); ?>

    <div id="bokeh">
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div class="light"></div>
        <div></div>
    </div>


    <div class="panel-darken">

        <div class="page-width">
            <div class="panel-container">
                <div>
                    <h4><a href="<?php echo get_site_url(); ?>/design">DESIGNS</a></h4>

                    <?php $catquery = new WP_Query('cat=6  &posts_per_page=1'); ?>
                    <?php while ($catquery->have_posts()) :
                    $catquery->the_post(); ?>
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    <?php the_date('d M Y', '<time>', '</time>'); ?>
                    <?php the_field('excerpt'); ?>
                </div>
                <div>
                    <a href="<?php the_permalink() ?>" rel="bookmark"><div class="thumb"><?php the_post_thumbnail(); ?></div></a>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>

            </div>
        </div>

        

        <div class="page-width">
            <div class="panel-container">
                <div>
                    <h4><a href="<?php echo get_site_url(); ?>/articles">WRITING</a></h4>
                    <?php $catquery = new WP_Query('cat=2&posts_per_page=1'); ?>
                    <?php while ($catquery->have_posts()) :
                    $catquery->the_post(); ?>
                    <a href="<?php the_permalink() ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>
                    <?php the_date('d M Y', '<time>', '</time>'); ?>
                    <?php the_field('excerpt'); ?>
                </div>
                <div>
                    <a href="<?php the_permalink() ?>" rel="bookmark"><div class="thumb"><?php the_post_thumbnail(); ?></div></a>

                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>


        <div class="page-width">
            <div class="panel-container">
                <div>
                    <h4><a href="<?php echo get_site_url(); ?>/blog">WITTERINGS</a></h4>
                    <?php $catquery = new WP_Query('cat=15 &posts_per_page=1'); ?>
                    <?php while ($catquery->have_posts()) :
                    $catquery->the_post(); ?>
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    <?php the_date('d M Y', '<time>', '</time>'); ?>
                    <?php the_field('excerpt'); ?>
                </div>
                <div>
                    <a href="<?php the_permalink() ?>" rel="bookmark"><div class="thumb"><?php the_post_thumbnail(); ?></div></a>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>

            </div>
        </div>


        <div class="page-width">
            <div class="panel-container panel-music">

                <h4><a href="<?php echo get_site_url(); ?>/music">TINKLINGS</a></h4>
                <?php $catquery = new WP_Query('cat=13  &posts_per_page=1'); ?>
                <?php while ($catquery->have_posts()) :
                    $catquery->the_post(); ?>
                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    <?php the_date('d M Y', '<time>', '</time>'); ?>
                    <?php the_content(); ?>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>



    </div>


<?php get_footer(); ?>