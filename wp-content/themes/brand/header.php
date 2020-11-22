<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title(''); } ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo bloginfo('rss2_url'); ?>">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/media-queries.css">

<!-- wp_header -->
<?php wp_head(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/theme.script.js"></script>

<?php // enqueue comment-reply.js (require for threaded comments)
	if ( is_singular() && get_option( 'thread_comments' ) )	wp_enqueue_script( 'comment-reply' ); 
?>

</head>

<body <?php body_class($class); ?>>

<div id="pagewrap">

	<header id="header">

		<div  class="container">

		 	<div class="row">
			    <div class="three columns">
					<h1 id="site-logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

			    </div>
			    <div class="nine columns">
					<nav id="main-nav-wrap">
						<?php wp_nav_menu(array('theme_location' => 'main-nav' , 'fallback_cb' => 'default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav' , 'menu_class' => 'main-nav')); ?>
					</nav>
			    </div>
		    </div>

		</div>

	</header>
	<!-- /#header -->

	<div id="body">