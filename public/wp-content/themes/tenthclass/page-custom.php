<?php 
/*	
Template Name: Your Custom Page
*/
?>

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
	<div class='content'>
		<p>We're using page-custom.php.</p>

		<?php 

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				echo(' :) ');
				the_content();

	} // end while
} // end if
?>
</div>	
<?php 

// get_sidebar( get_field('secondary_sidebar') );

// if ( is_active_sidebar( 'main-sidebar' ) ) {
// 	echo "<div class='sidebar'>";

// 	// dynamic_sidebar puts the widget in.
// 	dynamic_sidebar( 'main-sidebar');
// 	echo "</div>";
// }

// if ( is_active_sidebar( 'secondary-sidebar' ) ) {
// 	echo "<div class='sidebar'>";

// 	// dynamic_sidebar puts the widget in.
// 	dynamic_sidebar( 'secondary-sidebar');
// 	echo "</div>";
// }

// if ( is_active_sidebar( 'tertiary-sidebar' ) ) {
// 	echo "<div class='sidebar'>";

// 	// dynamic_sidebar puts the widget in.
// 	dynamic_sidebar( 'tertiary-sidebar');
// 	echo "</div>";
// }




// Trying to connect to sidebar selector...
$lar_sidebar = get_field('acf_field_sidebar_selector');


// If the sidebar is active (selected), then show sidebar. Else, show text.
if ( is_active_sidebar( '$lar_sidebar' ) ) {
	echo "<div class='sidebar'>";
	//dynamic_sidebar puts the widget in.
	dynamic_sidebar( '$lar_sidebar');
	echo "</div>";
} else {
	echo "<div class='sidebar'>";
	echo "Taiwan has the best books!";
	echo "</div>";
}



?>

</body>
</html>
