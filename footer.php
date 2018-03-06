			<footer class="row">

				<?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
					<div id="footer-widgets-bar" class="col-md-12 widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer_widgets' ); ?>
					</div><!-- #footer-widgets-bar -->
				<?php endif; ?>

			</footer>
			<div class="row copyright"><?php echo get_theme_mod("copyright"); ?></div>

		</div>
	</div>
</div>
</div>
</body>
</html>
