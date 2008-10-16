<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="info"><?php the_time('F jS, Y') ?> / <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> / by <?php the_author() ?></p>


					<?php the_content('Read more...'); ?>
				
                <?php include (TEMPLATEPATH . '/socialbar.php'); ?>

				<p class="postmetadata">Posted in: <?php the_category(', ') ?> <?php edit_post_link('Edit', ' | ', ' | '); ?>  </p>
				<?php the_tags('<p class="tags">Tags: ', ', ', '</p>'); ?>
				<div class="space"></div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('<span class="older">Older Entries</span>') ?></div>
			<div class="alignright"><?php previous_posts_link('<span class="newer">Newer Entries</span>') ?></div>
		</div>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
