<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<?php
	wp_head();

	?>
</head>
<body>
	<p>We're using front-page.php.</p>
	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			echo(' :) ');
			the_content();

	} // end while
} // end if
?>
</body>
</html>
