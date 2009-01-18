<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>

					<?php the_content('Read more...'); ?>

				<p class="postmetadata"><?php edit_post_link('Edit', ' | ', ' | '); ?>
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
