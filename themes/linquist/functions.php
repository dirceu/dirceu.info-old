


<?php
/*
File Name: Wordpress Theme Toolkit
Version: 1.0
Author: Ozh
Author URI: http://planetOzh.com/
*/

/************************************************************************************
 * THEME USERS : don't touch anything !! Or don't ask the theme author for support :)
 ************************************************************************************/
include(dirname(__FILE__).'/themetoolkit.php');

themetoolkit('linquist', 
    array(     
	
'dummyheader' => '{separator}',
'colors' => 'Color scheme: {radio|light|light|dark|dark}',
'navigation' => 'Display main menu 
{radio|nav|right of the logo
|nav2|below the logo - style 1
|nav3|below the logo - style 2
|no|don\'t display}',
'switch' => 'Allow users to switch the scheme {checkbox|switch|allow}',
'lightbox' => 'Enable lightbox {checkbox|lightbox|enable}',
'homelabel' => 'Home button name ## (default is Home)',
'info' => 'Footer text {textarea|2|60}',

    ),
    __FILE__     
);
    
	
function linquist_colors() {
	global $linquist;
	if ($linquist->option['colors'] == 'light') {
		echo '<link rel="stylesheet" href="';	
		print bloginfo('template_directory');
		echo '/style.css" type="text/css" /> ';
		echo '<link rel="alternate stylesheet" href="';	
		print bloginfo('template_directory');
		echo '/dark.css" type="text/css" title="dark" /> ';
 	}	
	if ($linquist->option['colors'] == 'dark') {
		echo '<link rel="stylesheet" href="';	
		print bloginfo('template_directory');
		echo '/dark.css" type="text/css" /> ';
		echo '<link rel="alternate stylesheet" href="';	
		print bloginfo('template_directory');
		echo '/style.css" type="text/css" title="light" /> ';
	}	                                                                                                                      		
}



function linquist_navigation() {
	global $linquist;
	if ($linquist->option['navigation'] == 'nav') {
		echo '<div id="nav" class="navright"><ul><li class="home"><a href="';
		print get_option('home');
		echo '" title="';
		print linquist_homelabel();
		echo '">';
		print linquist_homelabel();
		echo '</a></li>';
                echo "<li><a href='http://dirceu.info/blog' rel='me'>Blog</a></li>";
                echo "<li><a href='http://dirceu.emurse.com' rel='me'>Resum&eacute;</a></li>";
                echo "<li><a href='http://github.com/dirceu' rel='me'>Code</a></li>";
		print wp_list_pages('title_li=&depth1=&sort_column=menu_order');
		echo '</ul></div>';
	}
	
	if ($linquist->option['navigation'] == 'nav2') {
		echo '<div id="nav2"><li class="home"><a href="';
		print get_option('home');
		echo '" title="';
		print linquist_homelabel();
		echo '">';
		print linquist_homelabel();
		echo '</a></li>';
		print wp_list_pages('title_li=&depth1=&sort_column=menu_order');
		echo '</ul></div>';
	}
		if ($linquist->option['navigation'] == 'nav3') {
		echo '<div id="nav3"><li class="home"><a href="';
		print get_option('home');
		echo '" title="';
		print linquist_homelabel();
		echo '">';
		print linquist_homelabel();
		echo '</a></li>';
		print wp_list_pages('title_li=&depth1=&sort_column=menu_order');
		echo '</ul></div>';
	}
}


function linquist_lightbox() {
	global $linquist;
	if ($linquist->option['lightbox'] == 'enable') {
		require('wp-lightboxJS/wp-lightboxJS.php');
	}
}


function linquist_switch() {
	global $linquist;
	if ($linquist->option['switch'] == 'allow') {
		echo '<div id="style"><a href="#" title="Light" onclick="setActiveStyleSheet(\'light\'); return false;"><img src="';
		print bloginfo ('template_directory');
		echo '/images/light.png"></a> <a href="#" title="Dark" onclick="setActiveStyleSheet(\'dark\'); return false;"><img src="';
		print bloginfo('template_directory');
		echo '/images/dark.png"></a> </div>';
	}
}
		
		
function linquist_js() {
	global $linquist;
	if ($linquist->option['switch'] == 'allow') {
		echo '<script type="text/javascript" src="';
		print bloginfo('template_directory');
		echo '/js/styleswitcher.js"></script>';
	}
}



function linquist_homelabel() {
	global $linquist;
	if ($linquist->option['homelabel'] == '') {
	echo 'Home';
	} else {
	print $linquist->option['homelabel'] ;
	} 
}

function linquist_info() {
	global $linquist;
	if ($linquist->option['info'] == '') {
	echo '';
	} else {
	print $linquist->option['info'] ;
	echo '<br>';
	} 
}


// default options :
/* default values upon theme install */
if (!$linquist->is_installed()) {
$set_defaults['colors'] = 'light';
$set_defaults['navigation'] = 'show';
$set_defaults['lightbox'] = 'enable';
$set_defaults['navigation'] = 'nav';
$set_defaults['switch'] = 'allow';
$set_defaults['info'] = 'Copyright &copy 2008 Yoursite';
$result = $linquist->store_options($set_defaults);
}

?>