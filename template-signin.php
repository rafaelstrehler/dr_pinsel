<?php
/**
 * Template Name: Anmeldung
 */

get_header(); ?>
<div class="container">
  <!-- contact form -->

  <?php
  if (have_posts()) {
    while (have_posts()) { the_post();
      echo "<p>" . get_the_content() . "</p>";
    }
  }
  ?>
  <?php echo do_shortcode( '[contact-form-7 id="50" title="Anmeldung"]' ); ?>

</div>

<?php get_footer(); ?>
