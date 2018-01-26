<?php
/**
 * Template Name: Upload
 */

get_header(); ?>
<?php if(is_user_logged_in()): ?>
  <div class="container content">
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
  <div class="container">
    <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>">Bitte melden Sie sich an! </a>
  </div>
<?php
endif;

 ?>


<?php get_footer();
