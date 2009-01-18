<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> &middot; <?php bloginfo('description'); ?></title>
<?php if (function_exists('linquist_colors')) {linquist_colors();}?>
<?php if (function_exists('linquist_lightbox')) {linquist_lightbox();}?>
<?php if (function_exists('linquist_js')) {linquist_js();}?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<?php if (function_exists('linquist_switch')) {linquist_switch();}?>
	<div id="logo">
		<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h2><?php bloginfo('description'); ?></h2>
	</div>
	<?php if (function_exists('linquist_navigation')) {linquist_navigation();}?>