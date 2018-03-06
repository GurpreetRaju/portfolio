<?php
/**
 * The search template file
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */

get_header(); ?>


			<section>
			<?php if ( have_posts() ) : ?>

				<div class="breads row">
					<h3 class="page-title"><?php printf( __( 'Search Results for: %s', 'pixel-logic' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
				</div>
				<div class="row">

					<?php
						// Start the loop.
							while ( have_posts() ) : the_post();

								get_template_part( 'content', get_post_format() );
							// End the loop.
							endwhile;
							// Previous/next page navigation.
						blaze_paging_nav();

						// If no content, include the "No posts found" template.
					?>
				</div>

			<?php else :
					get_template_part( 'content', 'none' );
				endif;
			?>

			</section>


<?php get_footer(); ?>
