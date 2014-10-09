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
	<p>We're using single-books.php.</p>

	<?php
	$year = get_field( "year_published");
	$author = get_field( "author_name");

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 

			if ($year >= 2000) {
				the_title();
				the_content();
			} else {
				echo "Sorry, this book is too old. This book is from $year.";
			}




	} // end while
} // end if
?>
</body>
</html>
