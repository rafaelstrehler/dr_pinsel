<?php
/**
 * Template Name: home
 */

get_header(); ?>
<div class="container content">
  <div class="slider">
    <?php

    // check if the repeater field has rows of data
    if( have_rows('slider') ):

     	// loop through the rows of data
        while ( have_rows('slider') ) : the_row();?>


            <img src='<?= get_sub_field("img")?>' />
    <?php
        endwhile;

    else :

        // no rows found

    endif;

    ?>
  </div>
  <?php
  if (have_posts()) {
    while (have_posts()) { the_post();
      echo "<p>" . get_the_content() . "</p>";
    }
  }
  ?>
</div>

<script>

jQuery(document).ready(function() {

  jQuery('.slider').slick({
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

});
</script>
<?php get_footer(); ?>
