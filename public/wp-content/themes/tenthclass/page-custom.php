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
$lar_sidebar = get_field('another_sidebar_selector');
// die($lar_sidebar);




// If the sidebar is active (selected), then show sidebar. Else, show text.
if ( is_active_sidebar( $lar_sidebar ) ) {
	echo 'Sidebar is active.';
	echo "<div class='sidebar'>";
	//dynamic_sidebar puts the widget in.
	dynamic_sidebar( $lar_sidebar );
	echo "</div>";
} else {
	echo "<div class='sidebar'>";
	echo "Taiwan has the best books!";
	echo "</div>";
}


// 1) If every page uses the same Main Sidebar, then if you add a calendar widget to the sidebar the calendar widget will display on every page. So let's create three sidebars:
// Main Sidebar
// Secondary Sidebar
// Tertiary Sidebar


// When you create/edit a Page in WordPress, there should be a way to select which sidebar you want to appear. For example, if you create a page called, "Favourite Books Stores", you may want to have it use the Secondary Sidebar.



// Finally, if you don't want to select any of the three sidebars when you create/edit a Page, there should be a textfield. You can type text and that will display instead of a sidebar. For example, on the "Favourite Books Stores" I may just want some text to display in the sidebar which says "Taiwan has the best books!".


?>

</body>
</html>
