<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package untitled
 */
?>

	</div><!-- #main .site-main -->
</div><!-- #page .hfeed .site -->

	<div id="colophon-wrap">
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<?php printf( esc_html__( '%1$s by %2$s', 'untitled' ), 'Powered', '<a href="https://wordpress.org/">WordPress</a>' ); ?>

				<span class="sep">&middot;</span>

				<?php printf( esc_html__( 'Built with %1$s', 'untitled' ), '<a href="https://refueled.net/">Untitled</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #colophon-wrap -->

<?php wp_footer(); ?>
</body>
</html>