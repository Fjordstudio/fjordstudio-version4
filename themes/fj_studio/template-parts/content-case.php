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
	<?php if( !is_singular() ){ ?>
		<div class="hidden overlay">
		<header class="hidden entry-header">
	<?php }else { ?>
		<div class="overlay">
		<header class="entry-header">
	<?php } ?>


		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

			?>
			<!-- <div class="entry-meta">
				<?php
				// fj_studio_posted_on();
				// fj_studio_posted_by();
				?>
			</div> -->

      <div class="entry-meta acf-meta-box">
        <div class="acf-info">
          <?php
            if ( is_singular() ){
              $terms = wp_get_post_terms( get_the_ID(), 'post_tag' );
              if($terms[0]->slug == 'skole'){
                echo '<p style="color:#404040;"><b>Skoleprojekt</b></p>';
              }

              if(get_field('date_finished')){
                echo '<p><b>Færdiggjort: </b>' . get_field('date_finished') . '</p>';
              }
              if(get_field('stack')){
                echo '<p><b>Stack: </b>' . get_field('stack') . '</p>';
              }
              if(get_field('link')){
                echo '<p><a target="_blank" href="' . get_field('link') . '"><i class="fas fa-link"></i> Besøg websted</a></p>';
              }

            }
          ?>
        </div>
        <div class="acf-screenshot">
          <?php
            if ( is_singular() ){
              if(get_field('screenshot') && get_field('link')){
                echo '<a target="_blank" href="' . get_field('link') . '"><img src="' . get_field('screenshot') . '"></a>';
              }else if(get_field('screenshot')){
                echo '<img src="' . get_field('screenshot') . '">';
              }
            }
          ?>
        </div>
      </div>

	</header><!-- .entry-header -->

	<?php if( !is_singular() ){ ?>
		<div class="hidden entry-content">
	<?php }else { ?>
		<div class="entry-content">
	<?php } ?>

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

  if(!is_single()){
    echo '<a class="overlayLink" href="' . get_the_permalink() . '"><i class="fas fa-link"></i> Læs mere</a>';
  }

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fj_studio' ),
			'after'  => '</div>',
		) );

		?>
	</div><!-- .entry-content -->

	</div>
	<?php fj_studio_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
</div>
