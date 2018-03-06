<?php
/**
 * The default template for displaying content
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */
?>

<div class="row">
	<div class="col-md-12 post" id="post-<?php the_ID(); ?>">
    <div class="post-title">
      <h4><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong></h4>
    </div>
    <div class="post-header-line">
      <span class="oi oi-person" title="person" aria-hidden="true"></span>by <a href="#"><?php the_author(); ?></a> |
			<span class="oi oi-calendar" title="calendar" aria-hidden="true"></span><?php the_date(); ?> |
			<span class="oi oi-comment-square" title="Comments" aria-hidden="true"></span><a href="#"><?php comments_number( 'No comment', '1 Comment', '% Comments' ); ?></a> |
			<span class="oi oi-tags" title="tags" aria-hidden="true"></span>Tags : <a href="#"><?php the_tags(); ?></a>
    </div>
    <div class="row post-content">
      <div class="col-md-3">
				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail',['class' => 'img-fluid']); ?></a>
				<?php else:?>
					<a href="<?php the_permalink(); ?>" class="post-thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/images/thumbnail-default.jpg" class="img-fluid" alt="default thumbnails"/></a>
				<?php endif; ?>
      </div>
      <div class="col-md-9">
				<p><?php the_excerpt(); ?></p>
        <p><a class="btn btn-read-more" href="<?php the_permalink(); ?>">Read more</a></p>
      </div>
    </div>
	</div>
</div>
