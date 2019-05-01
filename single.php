<!-- Single Post Page -->
<?php get_header('single'); ?>

<section class="container">
	<div class="row">
		<div class="col-12 col-lg-1 linkback">
			<a href="<?php echo home_url(); ?>" class="link_w"><button class="btn_sng">home</button></a>
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="link_w"><button class="btn_sng btn_margin">blog index</button></a>
		</div>
		<div class="col-12 col-lg-6 offset-lg-3 main_post">
			<?php 
				while(have_posts()) {
					the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<div class="divider"></div>
					<?php the_content(); ?>
				<?php }
			?>

			<!-- <div class="spacer"><?php // comments_template(); ?></div> -->
		</div>
	</div>
</section>

<?php get_footer(); ?>