<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fjordstudio
 */

?>

<?php
	$terms = wp_get_post_terms( get_the_ID(), 'importance' );

	/* echo '<pre>';
	var_dump($terms);
	echo '</pre>';

	echo $terms[0]->slug; */

	if($terms[0]->slug){
		$term_slug = $terms[0]->slug;
	}else {
		$term_slug = 'medium';
	}
?>

<div class="<?php echo 'priority priority-'.$term_slug; ?>">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="overlay">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				fj_studio_posted_on();
				fj_studio_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if(is_single()){
		the_content( sprintf(
			wp_kses(
				__( 'Læs videre<span class="screen-reader-text"> "%s"</span>', 'fj_studio' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
	}else {
		the_excerpt( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fj_studio' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
	}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fj_studio' ),
			'after'  => '</div>',
		) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fj_studio_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	</div>
	<?php fj_studio_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
</div>
