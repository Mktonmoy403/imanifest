<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iManifest
 */

?>

	<?php if( is_user_logged_in() ) : ?>
	</main></div></div>
	<?php else: 
		do_action( 'imenifest_render_footer' );
	?>
	</div>
	<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
