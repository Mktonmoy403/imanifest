<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package imanifest
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="description" content="Escape depression, unlock new knowledge - one book, one course at a time.">
  <meta name="keywords" content="iManifest, Steven Zee, iManifest System, Motivation, Books, Course.">
  <!-- Theme Core -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/normalize-css/normalize.css">
  <!-- Vendor CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-5.3.0/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons-1.10.3/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" />
  <!-- Google Font : poppins, Roboto -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Roboto&display=swap">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
<!-- Header :: Start -->
<header id="primary-header" class="primary-header">
    <div class="header-container">
		<div class="header-row">
        <div class="header-col">
          <div class="header-logo">
            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt=""></a>
          </div>
        </div>
        <div class="header-col">
          <div class="header-nav">
            <a href="login.html" class="header-btn">Sign in</a>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- Header :: End -->
