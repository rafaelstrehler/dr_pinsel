<?php
/**
 * Template Name: Kontakt
 */

get_header(); ?>

<div class="container content">
  <!-- contact form -->
  <?php
  if (have_posts()) {
    while (have_posts()) { the_post();
      echo "<p>" . get_the_content() . "</p>";
    }
  }
  ?>
  <?php echo do_shortcode( '[contact-form-7 id="5" title="Kontakt"]' ); ?>

</div>

<?php get_footer(); ?>
