<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package iManifest
 */

 get_header();
 ?>
 
	 <div id="primary" class="container text-center" style="min-height: 80vh;display:flex;align-items:center;justify-content:center;">
 
		 <section class="error-404 not-found">
			 <header class="page-header">
				 <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tqnsolar' ); ?></h1>
			 </header><!-- .page-header -->
 
			 <div class="page-content">
				 <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'tqnsolar' ); ?></p>
			 </div><!-- .page-content -->
		 </section><!-- .error-404 -->
 
	 </div><!-- #main -->
 
 <?php
 get_footer();
