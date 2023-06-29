<?php get_header(); ?>
    <main id="content">

        <div class="page-width">


            <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h1><?php the_title(); ?></h1>
                

                <?php if (get_field('post_vimeo')) : ?>
                    <div class="aos-item vidfit" data-aos-duration="1200" data-aos-delay="100" data-aos="fade-in">
                        <iframe src="https://player.vimeo.com/video/<?php echo get_field('post_vimeo'); ?>?title=0&byline=0&portrait=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                <?php endif; ?>

                <?php if (get_field('post_youtube')) : ?>
                    <div class="vidfit">
                        <iframe src="https://www.youtube.com/embed/<?php echo get_field('post_youtube'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>

                <?php if (get_field('post_other_media')) : ?>
                    <div class="vidfit">
                        <video width="100%" poster="/wp-content/uploads/media/<?php echo get_field('post_other_media'); ?>.png" controls="controls" preload="none">
                            <source type="video/mp4" src="/wp-content/uploads/media/<?php echo get_field('post_other_media'); ?>.mp4"/>
                            <source type="video/webm" src="/wp-content/uploads/media/<?php echo get_field('post_other_media'); ?>.webmsd.webm"/>
                            <source type="video/ogg" src="/wp-content/uploads/media/<?php echo get_field('post_other_media'); ?>.oggtheora.ogv"/>
                        </video>
                    </div>
                <?php endif; ?>


                <?php if (get_field('post_soundcloud')) : ?>
                    <div class="vidfit">
                        <iframe style="margin-bottom: 30px;" width="100%" scrolling="no" frameborder="no"
                                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo get_field('post_soundcloud'); ?>&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false"></iframe>
                    </div>
                <?php endif; ?>


                <div class="entry-music-content">
                    <?php the_post_thumbnail(); ?> 
                    <?php the_content(); ?>
                    <?php get_template_part('nav', 'below-single'); ?>
                </div>


                <?php if (comments_open() && !post_password_required()) {
                    comments_template('', true);
                } ?><?php endwhile;
                endif; ?>

            </div>
    </main>

<?php get_footer(); ?>