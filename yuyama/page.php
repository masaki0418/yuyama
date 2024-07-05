<?php get_header(); ?>
  <main class="contents">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article>
				<h2>404　Page Not Found</h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
	</main>
<?php get_footer(); ?>
