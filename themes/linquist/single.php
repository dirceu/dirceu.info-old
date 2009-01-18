<?php get_header(); ?>
	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php $content = split("<!--more-->", $post->post_content);?>
			<div class="post" id="post-<?php the_ID(); ?>">
			<div class="left">
				<?php echo apply_filters('the_content', $content[0]); ?>
				</div>
				<div class="right">
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta"><?php the_time(__('d M Y')) ?> <?php edit_post_link(__("edit"), ' | '); ?></p> 
					
					<?php echo apply_filters('the_content', $content[1]); ?>
				</div>
			</div>
	
	<div id="browse">
			<div class="alignleft"><?php previous_post_link('%link') ?></div>
			<div class="alignright"><?php next_post_link(' %link') ?></div>
	</div>
	
	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>


<?php get_footer(); ?>
