<?php get_header(); ?>
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2><br>
		<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
		<?php edit_post_link(__("Edit"), '<br>'); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>