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
    global $post;
    $post_slug = $post->post_name;

    $cat_id = get_cat_ID($post_slug);
    ?>

    <?php
    while (have_posts()) :
        the_post();
    ?>
        <h1><?php echo get_the_title(); ?></h1>
    <?php
    endwhile; // End of the loop.
    ?>

    <?php
    $args = array(
        'cat' => $cat_id,
        'post_type' => 'games',
        'post_status' => 'publish',
        'posts_per_page' => 5,
    );
    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()) : ?>

        <section style="margin-bottom: 80px;" id="events">
            <div class="" >
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a class="item" href="<?php the_permalink(); ?>" style="margin: 80px 0; display: block;">
                        <div class="pagecontent">
                            <h3><?php echo get_the_title(); ?></h3>
                            <p><?php the_excerpt(__('(more…)'));?></p>
                        </div>
                        <div class="fourpagebox ">
                            <div class="thumbbx">
                                <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'events'); ?>" alt="">
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </section>

    <?php
    endif;
    wp_reset_postdata();
    ?>

</main><!-- /.zak-primary -->

<?php

get_footer();
