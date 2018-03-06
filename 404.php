<?php
/**
 * The 404 template file
 *
 * @package Portfolio
 * @since Portfolio 1.0
 */

get_header(); ?>

			<section>

				<div class="row">
					<h3 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'blaze' ); ?></h3>
				</div>
				<div class="row">
					<div class="col-md-12 no-content">
						<div class="page-content">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'blaze' ); ?></p>
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>

			</section>


<?php get_footer(); ?>
