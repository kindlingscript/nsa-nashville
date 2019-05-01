<?php 

	get_header('front');

	$blog_index = get_permalink( get_option( 'page_for_posts' ) ); 

?>

<section class="intro container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<h1 class="headings">Welcome!</h1>
			<h5 class="lg_des">We are the Nashville, TN chapter of the National Stuttering Association. We welcome people who stutter, those who know them, and speech-language pathologists to come and sit in on one our meetings. If you live in the area and enjoy your visit, we’d love to see you become a regular attendee!</h5>
		</div>
		<div class="col-12 col-lg-5 offset-lg-1">
			<img src="<?php echo get_template_directory_uri(); ?>/images/feb-group.png" alt="February 2019 group photo" class="member_photo">
			<p class="member_photo_des">Members at our February 2019 meeting.</p>
		</div>
	</div>
</section>

<section class="location">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg">
				<?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
			</div>
			<div class="col-12 col-lg offset-lg-1 blurb">
				<h1 class="headings t_white">When & Where</h1>
				<h5 class="lg_des t_white">We meet at the Glen Leven Presbyterian Church on the third Monday of each month. Meetings start at 6 PM and typically run for about two hours.</h5>
			</div>
		</div>
	</div>
</section>

<section class="blog container">
	<h1 class="headings"><a href="<?php echo $blog_index; ?>" class="link_b">From The Blog</a></h1>
	<div class="row blog_section">

		<?php

			$args = array( 'numberposts' => '1' );
			$recent_posts = wp_get_recent_posts( $args );

			foreach( $recent_posts as $recent ) { ?>
				<div class="col-lg">
					<?php echo get_the_post_thumbnail( $recent["ID"], 'large', array( 'class' => 'excerpt_image' ) ); ?>
				</div>
		
				<div class="col-lg offset-lg-1">
					<div class="recent_blog_excerpt">
						<h3 class="blog_title">
							<a href="<?php echo get_permalink( $recent["ID"] )?>"><?php echo $recent["post_title"]?></a></h3>
						<div class="divider_front"></div>
						<h5 class="lg_des blog_excerpt"><?php echo $recent["post_excerpt"]?></h5>
						<a href="<?php echo get_permalink( $recent["ID"] )?>"><button class="rm">read more</button></a>
					</div>
				</div>
			<?php }
			wp_reset_query();
		?>

			</div>
		</div>
	</div>
</section>

<?php get_footer( 'front' ); ?>