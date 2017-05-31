<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * 
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
            
            <header class="page-header">
				<h1 class="page-title"><?php _e( 'You taking a coffee break?', 'acceleratemarketing' ); ?></h1>
			</header>
            
                    <div id="break-page"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg"/>
                </div>       

            <div class="page-wrapper">
              
				<div class="page-content">
                                        
                    <h2><?php _e( 'Relax and drink your coffee while we help you find the right page.', 'acceleratemarketing' ); ?></h2>
					<h2><?php _e( 'This can be somewhat embarrassing, but don\'t worry.', 'acceleratemarketing' ); ?></h2>
					<p class="shadow"><?php _e( ' Check to see the page you\'re looking for. Searching will help, really.', 'acceleratemarketing' ); ?></p>

<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>