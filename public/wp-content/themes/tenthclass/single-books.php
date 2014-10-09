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


// This is using get_field form the ACF plugin.
// http://www.advancedcustomfields.com/resources/get_field/

	$year = get_field( "year_published");
	$author = get_field( "author_name");
	$bookofmonth = get_field( "book_of_the_month");

// This is the WordPress loop.
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 

// If the year is greater or equal to the $year, then it will show the book details.
			// 
			if ($year >= 1780) {
				the_title();
				the_content();
				echo "The author of this book is $author.</br>";
				echo "The book was published in the year $year.</br>";
				if ($bookofmonth == true) { 
					echo "This is the book of the month.";
				}
// If the year is less than $year, it will show this message.
				
			} else {
				echo "Sorry, this book is too old. This book is from $year.";
			}




	} // end while
} // end if
?>
</body>
</html>
