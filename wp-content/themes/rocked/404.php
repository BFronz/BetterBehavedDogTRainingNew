<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Rocked
 */

get_header(); ?>

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'rocked' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					 <h2>Error 404 - Not Found</h2>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'rocked' ); ?></p>

					<div class="e404-search">
						<?php get_search_form(); ?>
					</div>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
