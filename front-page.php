<?php get_header(); ?>

<!-- <?php if (!isset($_GET['nosplash'])) { ?>
    <div class="splash_screen">

    </div>

    <script>
        const fadeOutSplash = document.querySelector('.splash_screen');

        setTimeout(() => {
            fadeOutSplash.style.display = 'none';
        }, 5500);
    </script>
<?php }
?> -->

<div class="centered_text">
<h1><?php the_title()?></h1>
</div>

<?php
$image1 = get_field('1_slide');
$image2 = get_field('2_slide');
$image3 = get_field('3_slide');
$image4 = get_field('4_slide');
$image5 = get_field('5_slide');
$image6 = get_field('6_slide');
$image7 = get_field('7_slide');
$image8 = get_field('8_slide');
$image9 = get_field('9_slide');
$image10 = get_field('10_slide');
?>

<div class="crossfade">
    <?php if ($image1) : ?><figure></figure><?php endif; ?>
    <?php if ($image2) : ?><figure></figure><?php endif; ?>
    <?php if ($image3) : ?><figure></figure><?php endif; ?>
    <?php if ($image4) : ?><figure></figure><?php endif; ?>
    <?php if ($image5) : ?><figure></figure><?php endif; ?>
    <?php if ($image6) : ?><figure></figure><?php endif; ?>
    <?php if ($image7) : ?><figure></figure><?php endif; ?>
    <?php if ($image8) : ?><figure></figure><?php endif; ?>
    <?php if ($image9) : ?><figure></figure><?php endif; ?>
    <?php if ($image10) : ?><figure></figure><?php endif; ?>
</div>

  <!-- <style >
      /* FRONTPAGE IMAGE REFERENCES */
      .crossfade > figure:nth-child(1) { background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2274.jpg'); }
  
  .crossfade > figure:nth-child(2) {
    animation-delay: 6s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2294.jpg');
  }
  
  .crossfade > figure:nth-child(3) {
    animation-delay: 12s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2577.jpg');
  }
  
  .crossfade > figure:nth-child(4) {
    animation-delay: 18s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2328.jpg');
  }
  
  .crossfade > figure:nth-child(5) {
    animation-delay: 24s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2429.jpg');
  }
  
  .crossfade > figure:nth-child(6) {
    animation-delay: 30s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2575.jpg');
  }
  
  .crossfade > figure:nth-child(7) {
    animation-delay: 36s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2623.jpg');
  }
  
  .crossfade > figure:nth-child(8) {
    animation-delay: 42s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2756.jpg');
  }
  
  .crossfade > figure:nth-child(9) {
    animation-delay: 48s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2859.jpg');
  }
  
  .crossfade > figure:nth-child(10) {
    animation-delay: 54s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2908.jpg');
  }
  
  .crossfade > figure:nth-child(11) {
    animation-delay: 60s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_2973.jpg');
  }
  
  .crossfade > figure:nth-child(12) {
    animation-delay: 66s;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/frontpage_slideshow/IMG_5526.jpeg');
  }
  </style> -->

<style>
    <?php if ($image1) : ?>
        .crossfade > figure:nth-child(1) { background-image: url('<?php echo esc_url($image1); ?>'); }
    <?php endif; ?>
    <?php if ($image2) : ?>
        
        .crossfade > figure:nth-child(2) { 
            animation-delay: 6s;
            background-image: url('<?php echo esc_url($image2); ?>'); }
    <?php endif; ?>
    <?php if ($image3) : ?>
        .crossfade > figure:nth-child(3) {
            animation-delay: 12s;

             background-image: url('<?php echo esc_url($image3); ?>'); }
    <?php endif; ?>
    <?php if ($image4) : ?>
        .crossfade > figure:nth-child(4) {
            animation-delay: 18s;

             background-image: url('<?php echo esc_url($image4); ?>'); }
    <?php endif; ?>
    <?php if ($image5) : ?>
        .crossfade > figure:nth-child(5) {
            animation-delay: 24s;

             background-image: url('<?php echo esc_url($image5); ?>'); }
    <?php endif; ?>
    <?php if ($image6) : ?>
        .crossfade > figure:nth-child(6) {
            animation-delay: 30s;

             background-image: url('<?php echo esc_url($image6); ?>'); }
    <?php endif; ?>
    <?php if ($image7) : ?>
        .crossfade > figure:nth-child(7) { 
            animation-delay: 36s;

            background-image: url('<?php echo esc_url($image7); ?>'); }
    <?php endif; ?>
    <?php if ($image8) : ?>
        .crossfade > figure:nth-child(8) { 
            animation-delay: 42s;

            background-image: url('<?php echo esc_url($image8); ?>'); }
    <?php endif; ?>
    <?php if ($image9) : ?>
        .crossfade > figure:nth-child(9) { 
            animation-delay: 48s;

            background-image: url('<?php echo esc_url($image9); ?>'); }
    <?php endif; ?>
    <?php if ($image10) : ?>
        .crossfade > figure:nth-child(10) { 
            animation-delay: 54s;
            background-image: url('<?php echo esc_url($image10); ?>'); }
    <?php endif; ?>
</style>
<?php get_footer(); ?>