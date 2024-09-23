<?php
/*
Template Name: Archive
*/
get_header(); 

?>

<div class="page_content z_padding">
<h1 class="center_align"><?php the_title(); ?></h1>
    <?php the_content(); ?>


<?php $args = array(
            'post_type' => 'archive',
            'orderby' => 'date',
            'order' => $alphabetical,
            'paged' => $paged,
            'posts_per_page' => -1
        );


    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <div class="artists_flex">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php echo esc_url(get_the_permalink()); ?>" class="thumbnail_archive">
                    <?php the_post_thumbnail('full'); ?>
                    <h4 class="black_txt"><?php the_title(); ?></h4>

                </a>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    <?php endif; ?>
    </div>
<?php get_footer();?>