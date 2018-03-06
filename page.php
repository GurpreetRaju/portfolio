<?php
/**
 * The page template file
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<h3 class="page-title"><?php the_title();?></h3>
		<div class="row">
			<div class="col-md-12">
				<div class="page-content">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="single-thumb">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile;?>

<?php get_footer(); ?>
