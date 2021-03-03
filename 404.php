<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<section data-section class="error-404 not-found">
			<div class="container">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_s' ); ?></h1>
			</header><!-- .page-header -->
			</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
