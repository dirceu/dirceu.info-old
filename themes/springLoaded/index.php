<?php get_header() ?>

<div id="content">

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<p class="post-date">
				<span class="date-day"><?php the_time('j') ?></span>
				<span class="date-month"><?php the_time('M') ?></span>
			</p>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p class="metadata">Posted by <?php the_author() ?> in <?php the_category(', '); ?>. <span class="feedback"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span><?php edit_post_link('Edit', ' | ', ''); ?></p>
			<div class="entry">
				<?php the_content('Continue Reading'); ?>
			</div>
		</div>

	<?php endwhile; ?>
	
	<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
		
		<div class="prev-next">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	
	<?php } ?>

<?php else : ?>
	<div class="post">
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	</div>

<?php endif; ?>

</div><!-- /content -->

</div><!-- /main -->

<?php get_sidebar() ?>

<?php get_footer() ?>