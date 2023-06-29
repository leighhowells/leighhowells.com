<?php

$text  = get_field('text');
$colour = get_field('colour');
$position = get_field('position');
$fixed = get_field('fixed');

// Get the block id and make it an html ID attribute for styling purposes
//$id = 'testimonial-' . $block['id'];

// Create align class from block alignment settings
//$align_class = $block['align'] ? 'align' . $block['align'] : ''; ?>


<div style="position: relative;">

    <?php
    $image = get_field('image');
    if( !empty( $image ) ): ?>
        <img style="height: 500px; background-image: url('<?php echo esc_url($image['url']); ?>'); background-attachment: <?php echo $fixed; ?>; background-size: cover; background-repeat: no-repeat;"  alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <?php if($position == 'left'){
       $align='left:1em';
    }  else {
        $align='right: 1em';
    }
    ?>


    <div style="position: absolute; padding: 2em; bottom:1em; <?php echo $align; ?>; background-color: <?php echo $colour; ?>;" >
        <p><?php echo $text; ?></p>
        <p><?php

            // check if the repeater field has rows of data
            if( have_rows('repeater') ):

                // loop through the rows of data
                while ( have_rows('repeater') ) : the_row();

                    // display a sub field value
                echo '<p>';
                    the_sub_field('text');
                    echo '</p>';

                endwhile;

            else :

                // no rows found

            endif;

            ?></p>
    </div>

</div>


