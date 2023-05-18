<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iManifest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 
if( is_user_logged_in() ) : ?>
<?php do_action( 'imenifest_render_header' ); ?>
<div class="dash-main">
<?php do_action( 'imenifest_render_sidebar' ); ?>
<div class="dash-main-right full-width">
<main class="dashboard-content-wrapper">
<?php else : ?>
	<div class="home-section">
		<?php echo do_action( 'imenifest_render_common_header' ); ?>
<?php endif; ?>

