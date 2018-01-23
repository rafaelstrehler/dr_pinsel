<?php
    if(! session_id()) :
        session_start();
    endif;
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <?php wp_head(); ?>
</head>
<body>

  <div class="container">
    <div class="page-header">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/aerztekunstlogo.PNG">
      <?php
      wp_nav_menu( array(
          'menu' => 'menu1',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    </div>
  </div>
