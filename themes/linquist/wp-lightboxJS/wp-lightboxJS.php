<?php
/*
Plugin Name: WP lightbox JS
Plugin URI: http://zeo.unic.net.my/notes/wp-lightbox-js-wordpress-plugin/
Description: <a href="http://www.huddletogether.com/projects/lightbox/">Lightbox JS</a> is a simple, unobtrusive script used to to overlay images on the current page written by Lokesh Dhakar. Add rel="lightbox" attribute to any link tag to activate the lightbox. This plugin integrate its feature into your WordPress blog.
Version: 0.8.2
Author: Safirul Alredha
Author URI: http://zeo.unic.net.my/
License: Creative Commons Attribution-ShareAlike
*/

define("IMAGE_FILETYPE", "(bmp|gif|jpeg|jpg|png)", true);

function wp_lightboxJS_init() {
	#$url = get_bloginfo('wpurl');
	$url = get_bloginfo('template_directory');
?>
	<!-- WP lightbox JS Plugin version 0.8.2 -->
	<link rel="stylesheet" href="<?php echo $url; ?>/wp-lightboxJS/lightbox.css" type="text/css" media="screen" />
	<style type="text/css" media="screen">
		#overlay { 
			background-image: url("<?php echo $url; ?>/wp-lightboxJS/images/overlay.png"); 
		}
		* html #overlay { 
			background-image: url("<?php echo $url; ?>/plugins/wp-lightboxJS/images/blank.gif");
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="<?php echo $url; ?>/wp-lightboxJS/images/overlay.png", sizingMethod="scale");
		}
	</style>

	<script type="text/javascript" src="<?php echo $url; ?>/wp-lightboxJS/lightbox.js"></script>
	<script type="text/javascript">
		var loadingImage = "<?php echo $url; ?>/wp-lightboxJS/images/loading.gif";
		var closeButton = "<?php echo $url; ?>/wp-lightboxJS/images/close.gif";
	</script>	
<?php }

function wp_lightboxJS_replace($string) {
	$pattern = '/(<a(.*?)href="([^"]*.)'.IMAGE_FILETYPE.'"(.*?)><img)/ie';
  	$replacement = 'stripslashes(strstr("\2\5","rel=") ? "\1" : "<a\2href=\"\3\4\"\5 rel=\"lightbox\"><img")';
	return preg_replace($pattern, $replacement, $string);
}

add_action('wp_head', 'wp_lightboxJS_init');
add_filter('admin_footer', 'wp_lightboxJS_add_quicktag');
add_filter('the_content', 'wp_lightboxJS_replace');

?>
