<?php
/*
 * Template Name: Page with Sidebar
*/

get_header(); ?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

            <?php

                if ( !is_front_page() ) {

                    if ( function_exists(simple_breadcrumb) ) {

                        simple_breadcrumb();

                    }

                }


            ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

