<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fjordstudio
 */

get_header();
?>

	<div id="primary" class="content-area archive-demo">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

      <header class="page-header">
				<h1>
					Demoer
				</h1>
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				//echo '<h1>' . get_the_archive_title() . '</h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
      <p>
        Dette er siden for mine for-sjov projekter, animations-demoer og eksperimenter med ny teknologi. Ting, der egentlig ikke behøvede at føre til noget, men som var lærerige og sjove at lave - og i nogle tilfælde alligevel også førte til et produkt, der er værd at dele.
      </p>
      <p>Her på siden kan I se mine personlige favoritter. For mere, se også <a href="https://codepen.io/Katrine-Marie">min CodePen profil</a>.</p>
      <div class="flex-content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-demo', get_post_type() );

			endwhile;
      ?></div><?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
