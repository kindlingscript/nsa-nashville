<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo site_url(); ?></title>
</head>
<body>
	
	<section class="header">
		<img class="cover" src="<?php echo the_post_thumbnail_url( 'large' ); ?>">
	</section>