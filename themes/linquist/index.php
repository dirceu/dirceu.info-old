<?php get_header(); ?>
	<div id="content">
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
<?php $content = split("<!--more-->", $post->post_content);?>
				<div class="post" id="post-<?php the_ID(); ?>">
				<div class="left">
					<?php echo apply_filters('the_content', $content[0]); ?>
				</div>
				<div class="right">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta"><?php the_time(__('d M Y')) ?> | <?php comments_popup_link('no comments &#187;', '1 comment &#187;', '% comments &#187;'); ?> <?php edit_post_link(__("edit"), ' | '); ?></p> 
					
					<?php echo apply_filters('the_content', $content[1]); ?>
				</div>
			</div>
		<?php endwhile; ?>

		<div id="browse">
			<div class="alignleft"><?php next_posts_link('Older posts') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer posts') ?></div>
		</div>

	<?php else : ?>
		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>

<?php get_footer(); ?>