<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>	
             <li>
      		  <h2><?php _e('Recent Posts'); ?></h2>
              <ul>
              <?php get_archives('postbypost', '10', 'custom', '<li>', '</li>'); ?>
              </ul>
           	 </li>
             
		<?php endif; ?>
</ul>