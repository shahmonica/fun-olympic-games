<?php

/**
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zakra
 */

get_header();
?>

<main id="zak-primary" class="zak-primary">

    <?php
    while (have_posts()) :
        the_post();
    ?>
        <h1><?php echo get_the_title(); ?></h1>
    <?php
    endwhile; // End of the loop.
    ?>

</main><!-- /.zak-primary -->

<?php

get_footer();
