<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header_area">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('mytheme_logo'); ?> " alt=""></a>
      </div>
      <div class="col-md-5">
      <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') );   ?>
      
      </div>
      <div class="col-md-4">
        <a class="login_btn" href="<?php is_login(); ?>">Login</a>
        <a class="sing_btn" href="#">Sing up</a>
      </div>
    </div>
  </div>
</header>