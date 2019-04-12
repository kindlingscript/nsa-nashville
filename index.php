<?php get_header(); ?>

<section class="intro container">
	<div class="row">
		<div class="col-lg pr-5">
			<h1 class="headings_cl">Welcome!</h1>
			<h5 class="lg_des">We are the Nashville, TN chapter of the National Stuttering Association. We welcome people who stutter, those who know them, and speech-language pathologists to come and sit in on one our meetings. If you live in the area and enjoy your visit, we’d love to see you become a regular attendee!</h5>
		</div>
		<div class="col-lg pl-5 ml-5 mt-5">
			<img src="<?php echo get_template_directory_uri(); ?>/images/feb-group.png" alt="February 2019 group photo" class="member_photo" width="500">
		</div>
	</div>
</section>

<section class="location container-fluid bg_blue">
	<div class="row">
		<div class="col-lg el_left">
			<?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
		</div>
		<div class="col-lg el_right">
			<h1 class="headings_cl t_white">When & Where</h1>
			<h5 class="lg_des t_white">We meet at the Glen Leven Presbyterian Church on the third Monday of each month. Meetings start at 6 PM and typically run for about two hours.</h5>
		</div>
	</div>
</section>

<section class="blog container">
	<h1 class="headings_std">From The Blog</h1>
	<div class="row blog_section">
		<div class="col-lg">
			<img class="blog_image" src="<?php echo get_template_directory_uri(); ?>/images/blog.jpg" alt="Most recent blog image description" width="500">
		</div>
		<div class="col-lg">
			<div class="recent_blog_excerpt">
				<h3>Example Blog Title</h3>
				<hr class="blue_hr">
				<h5 class="lg_des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet nisl purus in mollis nunc. Porttitor eget dolor morbi non arcu risus. Hendrerit dolor magna eget est lorem ipsum dolor sit amet. Nam libero justo laoreet sit amet. Vel facilisis volutpat est velit egestas dui id.</h5>
				<h5 class="lg_des">Duis convallis convallis tellus id interdum velit laoreet id. Tellus cras adipiscing enim eu turpis. Quis risus sed vulputate odio ut. Tortor aliquam nulla facilisi cras. Lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit.</h5>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>