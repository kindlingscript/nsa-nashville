<?php 

	/* Blog Index Page */

	get_header(); 

?>

<div class="container recent_post">
	<div class="row">
		<?php
				$args = array( 'numberposts' => '1' );
				$recent_posts = wp_get_recent_posts( $args );

				foreach( $recent_posts as $recent ) {
					echo '<div class="col-12 col-lg-5">' . get_the_post_thumbnail( $recent["ID"], 'large', array( 'class' => 'excerpt_image' ) ) . '</div>';
					echo 
						'<div class="col-12 col-lg-6 offset-lg-1">
							<div class="recent_blog_excerpt">
							<h3 class="blog_title"><a href="' . get_permalink( $recent["ID"] ) . '">' . $recent["post_title"] . '</a></h3>
							<hr class="blue_hr">
							<h5 class="lg_des blog_excerpt">' . $recent["post_excerpt"] . '</h5>
							<a href="' . get_permalink( $recent["ID"] ) . '"><button class="rm">read more</button></a>
							</div>
						</div>';
				}
				wp_reset_query();
			?>
	</div>
</div>

<div class="post_content container">

	<?php 
		$args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 6,
      'offset' => 1
 		); // get all posts EXCEPT the most recent

 		$query = new WP_Query($args);

 		// Get total posts
    $total = $query->post_count;

    // Set indicator to 0;
    $i = 0;

 		if ( have_posts() ): while ( $query->have_posts() ) : $query->the_post(); ?>

      <?php if ( $i == 0 ) echo '<div class="row">'; ?>

        <div class="col-lg-4 post_box" style="margin-bottom: 65px;">

	        <p>
	            <?php if ( has_post_thumbnail() ) : ?>
	                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'index-thumb' ); ?></a>
	            <?php endif; ?>
	        </p>

	        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

	        <p>Posted on <?php echo the_time('F jS, Y');?> by <?php the_author_posts_link(); ?> </p>

        </div><!-- col -->

      <?php $i++; ?>

      <?php
      // if we're at the end close the row
      if ( $i == $total ) { 
          echo '</div>';
      } else {
        /** 
        * Perform modulus calculation to check whether $i / 2 is whole number
        * if true close row and open a new one
        */
       	if ( $i % 3 == 0 ) {
          echo '</div><div class="row">';
        }
      }
      ?>

  	<?php endwhile; ?>
  <?php endif; ?>

</div>

<?php get_footer(); ?>