<?php
get_header();
?>




<div class="page_content z_padding">
    <h1 class="center_align"><?php echo get_option('404_title', 'sdfdf'); ?></h1>
    <p class="center_align"><?php echo wp_kses_post(get_option('404_message', 'Sorry, the page you are looking for does not exist.')); ?></p>
</div>
   


<?php get_footer(); ?>