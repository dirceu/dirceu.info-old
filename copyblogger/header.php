<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php if (is_home()) { bloginfo('description'); } else { wp_title('',true); } ?> &#8212; <?php bloginfo('name'); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
        <meta name="resource-type" content="document" />
        <meta name="classification" content="Internet" />
        <meta name="author" content="Dirceu Pereira Tiegs" />
        <meta name="description" content="Dirceu Pereira Tiegs' personal website." />
        <meta name="keywords" content="python, zope, plone, django, ruby, rails, development, git, productivity, web, agile" />
        <meta name="robots" content="ALL" />
        <meta name="rating" content="General" />
        <meta name="language" content="pt-br" />
        <meta name="distribution" content="Global" />
        <meta name="doc-class" content="Completed" />
        <meta name="revisit-after" content="1" />
        <meta name="ICBM" content="-28.682757,-49.392128" />
        <meta name="DC.title" content="dirceu.info" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom.css" type="text/css" media="screen" />
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie7.css" />
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/dirceuinfo" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>
<body class="custom">

<div id="header">
	<div id="logo">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<?php if (is_home()) { ?>
		<h1><?php bloginfo('description'); ?></h1>
		<?php } else { ?>	
		<p id="tagline"><?php bloginfo('description'); ?></p>
		<?php } ?>
	</div>
</div>
	
<div id="container">
	<div id="nav">
		<ul>
			<?php include (TEMPLATEPATH . '/nav_menu.php'); ?>
		</ul>
	</div>