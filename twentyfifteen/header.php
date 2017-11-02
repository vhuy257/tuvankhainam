<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()); ?>/semantic-ui/semantic.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()); ?>/style.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="<?php echo esc_url( get_template_directory_uri()); ?>/semantic-ui/semantic.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri()); ?>/js/main.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div id="sidebar" class="sidebar">
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding main ui container">
					<div class="ui text menu">
						<div class="item logo">
							<?php twentyfifteen_the_custom_logo(); ?>
						</div>
						<a class="browse item">
							Browse Courses
							<i class="dropdown icon"></i>
						</a>
					</div>
					<div class="ui flowing basic admission popup">
						<div class="ui three column relaxed divided grid">
							<div class="column">
								<h4 class="ui header">Business</h4>
								<div class="ui link list">
									<a class="item">Design &amp; Urban Ecologies</a>
									<a class="item">Fashion Design</a>
									<a class="item">Fine Art</a>
									<a class="item">Strategic Design</a>
								</div>
							</div>
							<div class="column">
								<h4 class="ui header">Liberal Arts</h4>
								<div class="ui link list">
									<a class="item">Anthropology</a>
									<a class="item">Economics</a>
									<a class="item">Media Studies</a>
									<a class="item">Philosophy</a>
								</div>
							</div>
							<div class="column">
								<h4 class="ui header">Social Sciences</h4>
								<div class="ui link list">
									<a class="item">Food Studies</a>
									<a class="item">Journalism</a>
									<a class="item">Non Profit Management</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .site-branding -->
			</header>
			<!-- .site-header -->
		</div>
		<!-- .sidebar -->
		<div id="content" class="site-content">
