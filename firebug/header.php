<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
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
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/dirceuinfo" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">

	<div id="header">
		<div id="logo"><h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
		</div>

		<div id="topsearch">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="swap_value" />
		<input type="image" src="<?php bloginfo('template_directory'); ?>/images/go.gif" id="go" alt="Search" title="Search" />
		</form>
		</div>
		<div class="clear"></div>
	</div>

	<div id="nav">

		<ul>
<li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>">Home<?php echo $langblog;?></a></li>
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
<li class="page_item" title="About"><a href='http://dirceu.info' title='About'>About</a></li>
<li class="rsslink"><a href="http://feeds.feedburner.com/dirceuinfo">{RSS}</a></li>
<li class="date"><script src="<?php bloginfo('template_url'); ?>/date.js" type="text/javascript"></script></li>
		</ul>

	</div>

<div id="main">
