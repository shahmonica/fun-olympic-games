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

    <?php $query = new WP_Query([
        'post_type'      => 'events',
        'nopaging'       => true,
        'posts_per_page' => '10',
    ]); ?>

    <?php if ($query->have_posts()) : ?>

        <section style="margin-bottom: 80px;" id="events">
            <h1 style="text-align:center">Browse Games</h1>
            <div class="owl-carousel owl-theme event-carousel">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <a class="item" href="<?php the_permalink(); ?>">
                    <div class="fourpagebox ">
                        <div class="thumbbx"><img src="<?php echo get_the_post_thumbnail_url($post->ID, 'events'); ?>" alt=""></div>
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
    ?>

    <?php $query = new WP_Query('posts_per_page=5'); ?>

    <?php if ($query->have_posts()) : ?>

        <section class="section_latest_news" style="margin-bottom: 80px;">
            <h1 style="text-align:center">Latest News</h1>
            <div class="latestnews">
                <div class="owl-carousel owl-theme latest-news-carousel">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="latest-news item">
                        <div class="news_imgbox">
                            <img decoding="async" src="<?php echo get_the_post_thumbnail_url($post->ID, 'events'); ?>" alt="">
                        </div>
                        <div class="news_content">
                            <h2 class="news_title"><?php the_title(); ?></h2>
                            <p><?php the_excerpt(__('(more…)'));?></p>
                            <a href="<?php the_permalink(); ?>">Read more</a>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
            <div class="clear"></div>
        </section>

    <?php
    endif;
    wp_reset_postdata();
    ?>

<?php $query = new WP_Query([
        'post_type' => 'games',
        'post_status' => 'publish',
        'posts_per_page' => 5,
    ]); ?>

    <?php if ($query->have_posts()) : ?>

        <section style="margin-bottom: 80px;" id="events">
            <h1 style="text-align:center">Upcoming Games</h1>
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
    ?>


    <div class="clear"></div>
    </div><!-- .container -->
    </section>
</main><!-- /.zak-primary -->


<?php
get_footer();
