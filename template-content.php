<?php
/**
 * Template Name: Inhalt
 */

get_header(); ?>
<div class="container">
  <?php
  if (have_posts()) {
    while (have_posts()) { the_post();
      echo "<p>" . get_the_content() . "</p>";
    }
  }
  ?>
</div>

<?php get_footer(); ?>
