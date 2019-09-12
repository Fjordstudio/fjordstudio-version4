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

      $slideNo = 1;
      echo '<ul id="frontpage-slider">';
      while ( $loop->have_posts() ) : $loop->the_post();

      echo '<li>';
        echo '<a href="#slide' . $slideNo . '">';
        echo '<a href="' . get_the_permalink() . '">';
        echo '<img src="' . the_post_thumbnail() . '" alt="">';
        echo '<div class="slideOverlay" style="display:none;">';

        // echo '<pre style="color:#000;">';
        // var_dump(get_the_category(get_the_ID()));
        // echo '</pre>';

        $categories = get_the_category(get_the_ID());
        // echo $categories[0]->cat_name;

        echo '<p class="sliderCategories">CASE | ';
        foreach($categories as $key => $value){
          echo '<span>' . $categories[$key]->cat_name . '</span>';
        }
        echo '</p>';

        echo '<h2>' . get_the_title() . '</h2>';
        the_excerpt();

        if(get_field('date_finished')){
          echo '<p style="color:#aaa;margin-top:40px;"><b>Færdiggjort: </b>' . get_the_date() . '</p>';
        }
        if(get_field('stack')){
          echo '<p style="color:#aaa;"><b>Stack: </b>' . get_field('stack') . '</p>';
        }
        /* echo '<p><a style="color:orchid;" href="' . get_the_permalink() . '"><i class="fas fa-link"></i> Se case her</a></p>';
        echo '</a>'; */
        echo '</div>';
      echo '</a></li>';

        $slideNo++;
      endwhile;
      echo '</ul>';

      wp_reset_postdata();
     ?>

     <div class="frontpage-posts">
     <?php
/**
* Setup query to show the ‘services’ post type with ‘8’ posts.
* Output is title with excerpt.
*/
   $args = array(
       'post_type' => 'post',
       'post_status' => 'publish',
       'posts_per_page' => 2,
       ‘orderby’ => ‘title’,
       ‘order’ => ‘ASC’,
   );

   $loop = new WP_Query( $args );

   while ( $loop->have_posts() ) : $loop->the_post();
      // print the_title();
      // the_excerpt();
    ?>
      <div class="priority">
      <article id="post-<?php get_the_ID(); ?>">
      	<div class="hidden overlay">
      	<header class="entry-header">
      		<?php
      			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      		?>
          <div class="entry-meta">
    				<?php
    				fj_studio_posted_on();
    				fj_studio_posted_by();
    				?>
    			</div><!-- .entry-meta -->
      	</header><!-- .entry-header -->

      	<div class="entry-content">
      		<?php
      		the_excerpt( sprintf(
      			wp_kses(
      				/* translators: %s: Name of current post. Only visible to screen readers */
      				__( 'Læs videre<span class="screen-reader-text"> "%s"</span>', 'fj_studio' ),
      				array(
      					'span' => array(
      						'class' => array(),
      					),
      				)
      			),
      			get_the_title()
      		) );

          echo '<a class="overlayLink" href="' . get_the_permalink() . '"><i class="fas fa-link"></i> Læs mere</a>';

      		?>
      	</div><!-- .entry-content -->

      	</div>
      	<?php fj_studio_post_thumbnail(); ?>

      </article><!-- #post-<?php the_ID(); ?> -->
      </div>
      <?php
       endwhile;

       wp_reset_postdata();
      ?>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
