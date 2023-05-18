<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iManifest
 */

get_header();
?>
	<!-- Video Section :: Start -->
	<section id="video-intro" class="video-section-wrapper">
		<div class="video-section-container">
			<div class="video-section-row">
			<div class="video-section-col promo-video-col">
				<div id="player"></div>
			</div>
			<div class="video-section-col">
				<div class="video-section-content video-section-content-left">
				<a id="get-started" href="pricing.html" class="hero-btn" style="display: none;">Get Started</a>
				</div>
			</div>
			</div>
		</div>
	</section>
	<!-- Video Section :: End -->

<?php
get_footer();
