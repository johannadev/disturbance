<?php
/*
Template Name: Artists page archive
*/
get_header(); 

$order  = isset($_GET['order']) ? sanitize_text_field($_GET['order']) : '';
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

?>

<div class="page_content z_padding">
    <h1 class="center_align"><?php the_title(); ?></h1>
    <?php the_content(); ?>

    <?php if ($paged < 2) : ?>

    <?php
    $feat_args = array(
        'post_type' => 'artists',
        'orderby' => 'rand', // use 'rand' instead of 'RAND'
        'posts_per_page' => 1
    );

    $feat_query = new WP_Query($feat_args);

    if ($feat_query->have_posts()) :
        while ($feat_query->have_posts()) : $feat_query->the_post(); ?>
            <div class="feat_container">
            <div class="info_col black_txt">
                    <h2>Featured artist: <?php the_title(); ?></h2>
                    <?php
                        $post_tags = get_the_tags();
                        if ($post_tags) { ?>
                            <div class="tags">
                                <?php foreach ($post_tags as $tag) { ?>
                                    <div class="thumb_tag"><?php echo esc_html($tag->name); ?></div>
                                <?php } ?>
                            </div>
                        <?php } ?>

                        <p><?php echo wp_kses_post(get_field('thumbnails_info')); ?></p>


                    <a href="<?php echo esc_url(get_the_permalink()); ?>" class="standard_btn">
                        see more
                    </a>
                </div>

                <div class="feat_img">
                <?php the_post_thumbnail('full'); ?>
                </div>
              
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif; ?>
    <?php endif;?>

    <!-- Main Grid -->

    <div class="filter_flex">
    <?php if ($order === 'asc') { ?>
            <a href="<?php echo esc_url(site_url('contributing-artists/?order=desc')); ?>" class="standard_btn x_margin_right">
               Organise Z-A</a>
        <?php } else { ?>
            <a href="<?php echo esc_url(site_url('contributing-artists/?order=asc')); ?>" class="standard_btn x_margin_right">
               Organise A-Z</a>
        <?php } ?>

        <?php
    $tags = get_tags();
    if ($tags) { ?>
            <?php foreach ($tags as $tag) {
                $tag_link = get_tag_link($tag->term_id); ?>
                <a href="<?php echo esc_url($tag_link) ?>" title="<?php esc_attr($tag->name) ?>" class="standard_btn x_margin_right">
                    <?php echo esc_html($tag->name) ?></a>
            <?php  } ?>
    <?php } ?>
    </div>


    <?php
    if ($order === 'asc') {
        $alphabetical = 'ASC';
    } elseif ($order === 'desc') {
        $alphabetical = 'DESC';
    } else {
        $alphabetical = 'DESC';
    }?>


    <?php
     if ($order === 'asc' || $order === 'desc') {

        $args = array(
            'post_type' => 'artists',
            'orderby' => 'title',
            'order' => $alphabetical,
            'paged' => $paged,
            'posts_per_page' => 9
        );
    } 
 else {

        $args = array(
            'post_type' => 'artists',
            'orderby' => 'date',
            'order' => $alphabetical,
            'paged' => $paged,
            'posts_per_page' => 9
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <div class="artists_flex">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
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
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    <?php endif; ?>

    <?php  if ($paged > 1) :

$pagination_links = paginate_links(array(
    'total' => $query->max_num_pages,
    'prev_text' => 'PREVIOUS',
    'next_text' => 'NEXT',

));

else :

$pagination_links = paginate_links(array(
    'total' => $query->max_num_pages,
    'next_text' => 'NEXT PAGE...',
));

endif;
    ?>

    <?php $max_num_pages = $query->max_num_pages; ?>
    <?php if ($paged === $max_num_pages) : ?>
        <div class="pagination final_page black_txt">
            <?php echo $pagination_links; ?>
        </div>
    <?php elseif ($paged < 2) : ?>
        <div class="pagination first_page black_txt">
            <?php echo $pagination_links; ?>
        </div>
    <?php else : ?>
        <div class="pagination morethan_one black_txt">
            <?php echo $pagination_links; ?>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
