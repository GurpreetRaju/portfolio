<?php
/**
 * The single post or page template file
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-12 post" id="post-<?php the_ID(); ?>">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="post-thumb">
							<?php the_post_thumbnail('full'); ?>
						</div>
					<?php endif; ?>
					<div class="post-title">
						<h4><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h4>
					</div>
					<div class="post-header-line">
						<span class="oi oi-person" title="person" aria-hidden="true"></span>by <a href="#"><?php the_author(); ?></a> |
						<span class="oi oi-calendar" title="calendar" aria-hidden="true"></span><?php the_date(); ?> |
					</div>
					<div class="row post-content">
						<div class="col-md-12">
							<p><?php the_content(); ?></p>
						</div>
					</div>
					<?php get_comments(get_the_ID()); ?>
				</div>
			</div>
		<?php endwhile; ?>

	<?php
		else :
				get_template_part( 'content', 'none' );
		endif;
	?>

<?php get_footer(); ?>
