<?php get_header(); ?>

    <div class="pageContainer">

        <div class="page-width">

            <div id="page">

            <ul class="grid articleList">

                <div class="design-listing">

                    <h1><?php the_tags(); ?></h1>
                    <br/>
                    <hr/>

                    <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>
                    

                    <?php $catquery = new WP_Query('cat=6  &posts_per_page=1'); ?>

                    <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    <?php the_date('d M Y', '<time>', '</time>'); ?><?php the_excerpt(); ?>

                    <br/>
                        <hr/>
                        <br/>

                    <?php endwhile;
                    endif; ?>



                </div>




            </ul>
            </div>

        </div>
    </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>