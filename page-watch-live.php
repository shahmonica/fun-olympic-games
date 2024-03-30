<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zakra
 */

get_header();
?>

<main id="zak-primary" class="zak-primary">
    <?php
    if (!is_user_logged_in()) {
    ?>
        <h1 style="text-align:center">Please Login or Register to Watch Live Games.</h1>
        <?php
    } else {
        $args = array(
            'cat' => get_cat_ID('football'),
            'post_type' => 'games',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <section style="margin-bottom: 80px;" id="events">
                <h1 style="text-align:center">Live Football Games</h1>
                <div class="owl-carousel owl-theme upcoming-games-carousel">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a class="item" href="<?php the_permalink(); ?>">
                            <div class="fourpagebox ">
                                <div class="thumbbx">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'events'); ?>" alt="">
                                </div>
                                <div class="pagecontent">
                                    <h3><?php echo get_the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            </section>

    <?php
        endif;
        wp_reset_postdata();

        $args = array(
            'cat' => get_cat_ID('cricket'),
            'post_type' => 'games',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <section style="margin-bottom: 80px;" id="events">
                <h1 style="text-align:center">Live Cricket Games</h1>
                <div class="owl-carousel owl-theme upcoming-games-carousel">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a class="item" href="<?php the_permalink(); ?>">
                            <div class="fourpagebox ">
                                <div class="thumbbx">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'events'); ?>" alt="">
                                </div>
                                <div class="pagecontent">
                                    <h3><?php echo get_the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            </section>

    <?php
        endif;
        wp_reset_postdata();

        $args = array(
            'cat' => get_cat_ID('volleyball'),
            'post_type' => 'games',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <section style="margin-bottom: 80px;" id="events">
                <h1 style="text-align:center">Live Volleyball Games</h1>
                <div class="owl-carousel owl-theme upcoming-games-carousel">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a class="item" href="<?php the_permalink(); ?>">
                            <div class="fourpagebox ">
                                <div class="thumbbx">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'events'); ?>" alt="">
                                </div>
                                <div class="pagecontent">
                                    <h3><?php echo get_the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            </section>

    <?php
        endif;
        wp_reset_postdata();

        $args = array(
            'cat' => get_cat_ID('cycling'),
            'post_type' => 'games',
            'post_status' => 'publish',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <section style="margin-bottom: 80px;" id="events">
                <h1 style="text-align:center">Live Cycling Race</h1>
                <div class="owl-carousel owl-theme upcoming-games-carousel">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <a class="item" href="<?php the_permalink(); ?>">
                            <div class="fourpagebox ">
                                <div class="thumbbx">
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'events'); ?>" alt="">
                                </div>
                                <div class="pagecontent">
                                    <h3><?php echo get_the_title(); ?></h3>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
            </section>

    <?php
        endif;
        wp_reset_postdata();
    }
    ?>


    <div class="clear"></div>
    </div><!-- .container -->
    </section>
</main><!-- /.zak-primary -->


<?php
get_footer();
