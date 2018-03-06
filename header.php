<?php
/**
 * The template for displaying the header
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */

 ?>
<?php $themefolder=get_stylesheet_directory_uri(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gurpreet Raju</title>
		<link type="text/css" rel="stylesheet" href="<?php echo $themefolder;?>/style.css">
		<script src="<?php echo $themefolder;?>/js/bootstrap.min.js"></script>
	</head>
	<body class="bg-dark text-white">
    <div class="left-sidebar">
      <div class="bg-primary text-white">
        <div class="logo  pt-5 px-5">
          <a href="<?php bloginfo('url');?>" class="css-logo"><span>G</span></a>
        </div>
        <div class="details">
          <span class="name">Gurpreet Raju</span>
          <span class="tagline"><?php bloginfo('description');?></span>
        </div>
        <?php wp_nav_menu(array('theme_location' => 'header-menu','container' => '','menu_class' => 'menu bg-primary mb-3'));?>
        <?php //<a href="" class="menu-item"><span class="oi oi-brush" title="brush" aria-hidden="true"></span>My Portfolio</a> ?>
        <div class="social-icons-wrapper  pb-5 px-5">
          <a href="<?php echo get_theme_mod("social_fb");?>" class="social-icons"><div class="text-hide" style="background-image: url('<?php echo $themefolder;?>/images/facebook.png');">F</div></a>
          <a href="<?php echo get_theme_mod("social_li");?>" class="social-icons"><div class="text-hide" style="background-image: url('<?php echo $themefolder;?>/images/linkedin.png');">F</div></a>
          <a href="<?php echo get_theme_mod("social_mail");?>" class="social-icons"><div class="text-hide" style="background-image: url('<?php echo $themefolder;?>/images/email.png');">F</div></a>
        </div>
      </div>
    </div>
    <div class="right-content p-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <!--<div class="col-md-7">
            <a href="" class="brand-logo">
              <img src="<?php get_logo(); ?>" alt="Blaze Logo"/>
            </a>
          </div>
          </div> /input-group -->
