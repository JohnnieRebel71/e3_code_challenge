<?php
/**
 * @package E3 Coding Challenge Theme
 * @subpackage e3codingchallenge_theme
 * @author John Long
 */
?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/5485a2f1ef.js"></script>



	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri();?>/wp-content/themes/world_of_froyo/images/sample-slideshow.jpg">

	<title><?php
		// Detect Yoast SEO Plugin
		if (defined('WPSEO_VERSION')) {
			wp_title('');
		} else {
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'themename_theme' ), max( $paged, $page ) );
		}
		?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/stylesheets/bootstrap.min.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/respond.min.js"></script>
	<![endif]-->

	<!-- Add CSS3 Rules here for IE 7-9
	================================================== -->

	<!--[if IE]>
	<style type="text/css">
	</style>
	<![endif]-->


	<!-- Mobile Specific Metas
	================================================== -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Favicons
	================================================== -->

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/apple-touch-icon-114x114.png" />

	<link rel="pingback" href="<?php echo get_option('siteurl') .'/xmlrpc.php';?>" />

<?php
	/*
	 * enqueue threaded comments support.
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	// Load head elements
	wp_head();
?>
</head>

<!-- Mobile Menu Transition -->
<script>
/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
<body <?php body_class(); ?>>

	<header class="full left">
		<div class="container-fluid">
			<div class="row topbar">
				<div class="col-xs-48">
					<div class="container">
						<div class="col-xs-5">
				        <div id="logo"></div>
				    </div>
						<div class="col-xs-43 nav-desk"><?php wp_nav_menu( array( 'theme_location' => 'primary-navigation' ) ); ?></div>
						<div class="col-xs-43 nav-mob">
							<!-- The overlay -->
							<div id="myNav" class="overlay">

							<!-- Button to close the overlay navigation -->
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

							<!-- Overlay content -->
							<div class="overlay-content">
								<?php wp_nav_menu( array( 'theme_location' => 'primary-navigation' ) ); ?></div>
							</div>
							<!-- Use any element to open/show the overlay navigation menu -->
 							<button class="mob-menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="full left">
		<!-- <div class="container">
			<article class="col-sm-48"> -->
