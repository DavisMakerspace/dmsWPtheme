<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="text-center">
				<h1 class="page-title"><?php _e( '404, Page Not Found', 'dmsWPtheme' ); ?></h1>
			</header>

			<div class="text-center">

					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'dmsWPtheme' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'dmsWPtheme' ); ?></p>
					<img style="width:400px;height:auto;" src="https://davismakerspace.org/wp-content/uploads/2020/01/hammer.png">

					

			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
