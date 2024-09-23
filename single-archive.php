<?php get_header();?>

<div class="page_content z_padding">
    <h1 class="center_align"><?php the_title()?></h1>
    <?php the_content()?>

    <?php
    $tags = get_the_tags();

    if ($tags) {
        $displayed_posts = array(); // Array to keep track of displayed posts
    ?>
    <div class="related_section">
        <h3>Contributing artists</h3>
        <div class="artists_flex">
            <?php
            foreach ($tags as $tag) {
                $related_posts = get_posts(array(
                    'post_type' => 'artists',
                    'tag__in' => array($tag->term_id), // Get posts with the current tag
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                ));

                if ($related_posts) {
                    foreach ($related_posts as $post) {
                        if (in_array($post->ID, $displayed_posts)) {
                            continue; // Skip if the post is already displayed
                        }

                        $displayed_posts[] = $post->ID; // Add post ID to the array
                        setup_postdata($post); // Set up post data
            ?>
                        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="thumbnail black_txt">
                            <?php the_post_thumbnail('full'); ?>
                            <h4 class="black_txt"> <?php the_title(); ?> </h4>
                        </a>
            <?php
                    }
                    wp_reset_postdata(); // Reset post data
                }
            }
            ?>
        </div>
        </div>
    <?php
    }
    ?>


</div>
<?php get_footer();?>