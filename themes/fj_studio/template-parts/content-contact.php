<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php
		if(!is_front_page()){
			fj_studio_post_thumbnail();
	 	}
	 ?>

	<div class="entry-content">
    <div>
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fj_studio' ),
			'after'  => '</div>',
		) );
		?>
    </div>
    <div class="signature">
      <div id="signature">
  			<svg x="0px" y="0px" width="1000px" height="500px" viewBox="0 0 1000 500" style="enable-background:new 0 0 1000 500;" xml:space="preserve">
  				<desc>Katrine-Marie Burmeister - animated handwritten signature</desc>
  				<g id="katrine">
  					<path d="M189.5,117.5l-44,301c0,0,95-299,148-286c0,0-160,218-111,226
  						c0,0,43-11.5,85-97.25s-51,56.25-39,77.25s22-33,22-33s-38,219,126-155c0,0-3-60-50,99.5s3,99.5-6,45.5c0,0,24,24,33,20s-6,81,35,8
  						c0,0,10,12,24,4"/>
  				</g>
  				<g id="marie">
  					<path d="M412.5,385.5c0,0,152-249,149-261s-102,134-86,242c0,0-3,50,101-182
  						c0,0-82,140-66,167s38-78,66-75c0,0-101,147,0,39c0,0-34,57,23-1c0,0-5,18,19-3"/>
  				</g>
  				<g id="burmeister">
  					<path d="M709.299,142.5c0,0-65,130-63,229c0,0,25-188,103-229c0,0,35-26-79,144
  						c0,0,188-194-9,85c0,0-7,32,69-65c0,0-53.869,109,24.065-9c0,0-51.065,133,50.935-18c102-151,11-84,0-15.5
  						c-11,68.5-36,156.5,28,58.5c0,0,2,17,7,12"/>
  				</g>
  			</svg>

  		</div>
      <img src="https://fjordstudio.dk/resume/img/profile-pic-cropped.png" alt="Katrine-Marie Burmeister">
    </div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'fj_studio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
