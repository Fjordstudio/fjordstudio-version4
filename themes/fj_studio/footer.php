<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fjordstudio
 */

?>

<h2 class="frontpage-cta">
	Er du interesseret i et samarbejde?
</h2>

	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer_widget_1' ) ) : ?>
		<div id="footer-widgets" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'footer_widget_1' ); ?>
		</div><!-- #primary-sidebar -->
	<?php endif; ?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span>

				&copy; Fjordstudio, <?php echo date('Y'); ?>

			</span>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Tema: %1$s af %2$s.', 'fj_studio' ), 'fj_studio', '<a href="https://fjordstudio.dk">Katrine-Marie Burmeister</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
