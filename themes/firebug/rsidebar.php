<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>	
             <li>
      		  <h2><?php _e('Recent Posts'); ?></h2>
              <ul>
              <?php get_archives('postbypost', '10', 'custom', '<li>', '</li>'); ?>
              </ul>
           	 </li>
             
	<?php endif; ?>
        <h2 id="github-badge"></h2>
        <script type="text/javascript" charset="utf-8">
          GITHUB_USERNAME="dirceu";
          GITHUB_HEAD="h2";
          GITHUB_TITLE="My projects @ github";
          GITHUB_THEME="black";
        </script>
        <script src="http://drnicjavascript.rubyforge.org/github_badge/dist/github-badge-launcher.js" type="text/javascript"></script>
</ul>
