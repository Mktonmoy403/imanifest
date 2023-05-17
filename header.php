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
