<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<meta name="generator" content="WordPress 2.6" /> <!-- leave this for stats -->
        <meta name="author" content="Dirceu Pereira Tiegs" />
        <meta name="description" content="Dirceu Pereira Tiegs' personal website." />

        <meta name="keywords" content="python, zope, plone, django, ruby, rails, development, git, productivity, web, agile" />
        <meta name="robots" content="all" />
        <meta name="language" content="en,pt" />
        <meta name="DC.title" content="dirceu.info" />


<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/dirceuinfo" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?php bloginfo('template_url'); ?>/pngfix.js"></script>
<![endif]-->

<!-- Theme created by the449.com -->

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">


<div id="header">
	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a> <span><? bloginfo('description') ?></span></h1>
	
	<div class="search-bar">
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<p><input type="text" name="s" value="Search this Blog" id="s" />
			<button type="submit" id="submit"><img src="<?php bloginfo('template_url'); ?>/images/search-btn.gif" alt="Search" /></button></p>
		</form>
	</div>
	
</div><!-- /header -->

<div id="main">

<ul id="navigation">
	<li class="page_item <?php if(is_home()) { echo 'current_page_item'; } ?>"><a href="<?php bloginfo('home'); ?>">Home</a></li>
	<li class="page_item"><a href="http://github.com/dirceu">Code</a></li>
	<li class="page_item"><a href="http://twitter.com/dirceu">Twitter</a></li>
	<li class="page_item"><a href="http://dirceu.tumblr.com">Tumblelog</a></li>
	<li class="page_item"><a href="http://dirceu.emurse.com">Resum&eacute;</a></li>
	<?php wp_list_pages('title_li=' ); ?>
</ul>

