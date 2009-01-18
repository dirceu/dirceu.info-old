<div id="footer">
	<div id="copyright">
	<?php if (function_exists('linquist_info')) {linquist_info();}?>
	<?php bloginfo('name'); ?> is using the <a href="http://www.redworks.sk/linquist">Linquist</a> theme and is powered by <a href="http://wordpress.org/">Wordpress</a>. <?php wp_register('', ''); ?> &middot;  <?php wp_loginout(); ?>
	</div>
	<div id="icons">
	<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>""><img alt="RSS feed" src="<?php bloginfo('template_url'); ?>/images/rss.gif">RSS Feed</a>
	</div>
</div>
		<?php wp_footer(); ?></div>
</body>
</html>