<?php
/**
 * The archive template file
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */

get_header(); ?>

	<h3 class="page-title"><?php
		if ( is_day() ) :
			printf( __( 'Daily Archives: %s', 'blaze' ), '<span>' . get_the_date() . '</span>' );
		elseif ( is_month() ) :
			printf( __( 'Monthly Archives: %s', 'blaze' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'blaze' ) ) . '</span>' );
		elseif ( is_year() ) :
			printf( __( 'Yearly Archives: %s', 'blaze' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'blaze' ) ) . '</span>' );
		else :
			_e( 'Archives', 'blaze' );
		endif;
	?></h3>
	<div class="row">
		<?php if ( have_posts() ) :
		// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
				// End the loop.
			endwhile;
			// Previous/next page navigation.
		blaze_paging_nav();

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div>

<?php get_footer(); ?>
