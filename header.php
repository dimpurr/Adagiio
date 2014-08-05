<!DOCTYPE html>
<html lang="zh-cn">

<head>

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="dimpurr" />
<meta name="application-name" content="<?php bloginfo('name'); ?>"/>
<meta charset="<?php bloginfo('charset'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url')?>" />
<link rel="alternate" type="application/rdf+xml" title="RSS 1.0" href="<?php bloginfo('rss_url')?>" />
<link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url')?>" />

<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head();

$dpt_style = get_option("dpt_style");
if ( !empty($dpt_style) ) {
	echo "<style>" . $dpt_style . "</style>";
}

?>

</head>

<body>

<header id="hcontent" >

<div id="banner" style="background-image: url('<?php dpt_banner(); ?>');">

<nav id="nav">
	<div id="nav_sd">
		<?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
		<div id="spg"><div id="sdiv"><form id="nav_search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input id="nav_search_s" type="text" name="s" id="s" placeholder="Enter to Search" size="10" />
		</form></div></div>
	</div>
</nav>

</div>

<hgroup id="head">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"	>
		<h1><?php bloginfo( 'name' ); ?>		</h1>
	</a>
	<h2><?php bloginfo( 'description' ); ?></h2>
</hgroup>

</header>

<div id="page">