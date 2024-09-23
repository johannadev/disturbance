<?php

get_header();

?>

<div class="page_content z_padding">

<?php
    $tags = get_tags();
    $current_tag_id = get_queried_object_id();

    if ($tags) { ?>
        <div class="filter_flex">
            <?php foreach ($tags as $tag) {
                $tag_link = get_tag_link($tag->term_id);
                $active_class = ($tag->term_id == $current_tag_id) ? 'active_tag' : ''; ?>
                <a href="<?php echo esc_url($tag_link); ?>" class="standard_btn x_margin_right <?php echo $active_class; ?>" title="<?php echo esc_attr($tag->name); ?>">
                    <?php echo esc_html($tag->name); ?>
                </a>
            <?php } ?>
        </div>
    <?php } ?>

    <?php
    $tag = get_queried_object();
    $custom_query = new WP_Query(array(
        'post_type' => array('artists'),
        'tag_id' => $tag->term_id,
        'posts_per_page' => -1, // Adjust this as needed
    ));
    ?>

    <?php if ($custom_query->have_posts()) : ?>
        <div class="artists_flex">

            <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <a href="<?php echo esc_url(get_the_permalink()); ?>" class="thumbnail">
                    <?php the_post_thumbnail('full'); ?>
                    <h4 class="black_txt"><?php the_title(); ?></h4>

                    <?php
                    $post_tags = get_the_tags();
                    if ($post_tags) { ?>
                        <div class="tags">
                            <?php foreach ($post_tags as $tag) { ?>
                                <div class="thumb_tag"><?php echo esc_html($tag->name); ?></div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </a>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'your-text-domain'); ?></p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
</div>
</div>
<?php get_footer(); ?>