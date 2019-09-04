<?php
  get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

    <ul class="frontpage-menu">
      <li><a href="/jeg-arbejder-med-design-og-kode/"><i class="fas fa-link"></i> Om mig</a></li>
      <li><a href="/laes-min-blog/"><i class="fas fa-link"></i> Læs min blog</a></li>
      <li><a href="/case/"><i class="fas fa-link"></i> Se mine cases</a></li>
    </ul>

    <?php

      $args = array(
        'post_type' => 'case',
        'post_status' => 'publish',
        'tax_query' => array(
          array(
            'taxonomy' => 'importance',
            'terms' => 'fremhaevet',
            'field' => 'slug'
          )
        ),
        'posts_per_page' => 8,
          ‘orderby’ => ‘published’,
          ‘order’ => ‘ASC’,
        );

        $loop = new WP_Query( $args );

        

     ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
