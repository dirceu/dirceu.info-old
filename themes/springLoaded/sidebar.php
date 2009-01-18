<div id="sidebar">

<div class="side-widget side-rss">
	<p><a href="http://feeds.feedburner.com/dirceuinfo"><img src="<?php bloginfo('template_url'); ?>/images/sub-rss.png" alt="Subscribe to our RSS Feed" /></a></p>
</div>

<?php if (!function_exists('dynamic_sidebar')
	|| !dynamic_sidebar()) : ?>

<div class="side-widget side-posts">
	<h3>Latest Posts</h3>
	<ul>
		<?php query_posts('showposts=10'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;?>
	</ul>
</div>

<!--
<div class="side-widget side-links">
	<h3>Links</h3>
	<ul>
		<?php wp_list_bookmarks('categorize=0&title_li='); ?>
	</ul>
</div>

<div class="side-widget">
	<h3>Tags</h3>
	<a href="#">Tag 1</a>
	<a href="#">Tag 2 is huge, and I mean huge!</a> <a href="#">And here's tag 3 too.</a>
</div>
-->
<?php endif; ?>

</div><!-- /sidebar -->