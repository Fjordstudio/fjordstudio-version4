<?php
/*
  Template Name: Custom Contact Page
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'contact' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

?>

<script src="https://fjordstudio.dk/assets/js/velocity/velocity.min.js"></script>
<script>
  window.addEventListener("load", function(){

    // SVG signature animation
    jQuery('#signature #katrine path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear"
    });
    jQuery('#signature #marie path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear",
      delay:620
    });
    jQuery('#signature #burmeister path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear",
      delay:1200
    });
  });
</script>
