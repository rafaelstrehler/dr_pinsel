<?php
/**
 * Template Name: Upload
 */

get_header(); ?>
<?php if(is_user_logged_in()): ?>
  <div class="container">
    <?php
    if (have_posts()) {
      while (have_posts()) { the_post();
        echo "<p>" . get_the_content() . "</p>";
      }
    }
    ?>
  </div>

<?php
else: ?>
<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"> Login </a>
<?php
endif;

 ?>


<?php get_footer();
