<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fjordstudio
 */

?>

<div class="priority">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>');">
	<div class="hidden overlay">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
      <?php
        echo '<p>' . excerpt() . '</p>';
       ?>
		</div><!-- .entry-<summary></summary> -->

		<?php
			if(!is_single()){
	    	echo '<a class="overlayLink" href="' . get_the_permalink() . '">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    			 viewBox="0 0 52.974 52.974" style="enable-background:new 0 0 52.974 52.974;" xml:space="preserve">
    		<g>
    			<path d="M49.467,3.51c-4.677-4.679-12.291-4.681-16.97,0l-9.192,9.192c-0.391,0.391-0.391,1.023,0,1.414s1.023,0.391,1.414,0
    				l9.192-9.192c1.88-1.88,4.391-2.915,7.07-2.915c2.681,0,5.191,1.036,7.071,2.916s2.916,4.391,2.916,7.071
    				c0,2.68-1.036,5.19-2.916,7.07L36.033,31.088c-3.898,3.898-10.244,3.898-14.143,0c-0.391-0.391-1.023-0.391-1.414,0
    				s-0.391,1.023,0,1.414c2.34,2.339,5.412,3.509,8.485,3.509s6.146-1.17,8.485-3.509L49.467,20.48
    				c2.258-2.258,3.502-5.271,3.502-8.485C52.969,8.781,51.725,5.768,49.467,3.51z"/>
    			<path d="M26.84,40.279l-7.778,7.778c-1.88,1.88-4.391,2.916-7.071,2.916c-2.68,0-5.19-1.036-7.071-2.916
    				c-3.898-3.898-3.898-10.243,0-14.142l11.314-11.314c3.899-3.898,10.244-3.896,14.142,0c0.391,0.391,1.023,0.391,1.414,0
    				s0.391-1.023,0-1.414c-4.677-4.679-12.291-4.681-16.97,0L3.505,32.502c-2.258,2.258-3.501,5.271-3.501,8.485
    				c0,3.214,1.244,6.227,3.502,8.484s5.271,3.502,8.484,3.502c3.215,0,6.228-1.244,8.485-3.502l7.778-7.778
    				c0.391-0.391,0.391-1.023,0-1.414S27.231,39.889,26.84,40.279z"/>
    		</g>
    		</svg>
         Læs mere</a>';
	  	}
		?>

	</div>
	<?php fj_studio_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
</div>
