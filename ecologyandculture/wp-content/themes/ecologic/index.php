<?php get_header(); ?>

<!-- Spotlight Latest Episode -->

<?php $recentpost = new WP_Query("showposts=1"); while($recentpost->have_posts()) : $recentpost->the_post(); ?>
	<div id="spotlight-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<div id="spotlight-desc">
		<h1><?php the_title(); ?></h1>
		<?php the_excerpt(); ?>
	</div>
<?php endwhile; ?>

<!-- Recent Episodes -->

<div id="rec-wrapper">
	<?php query_posts("offset=1"); ?>
		<?php while (have_posts()) : the_post(); ?>
				<div class="recent-image">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="recent-desc">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</div>
		<?php endwhile; ?>
</div>

<!-- Sub-Sidebar -->

<?php get_sidebar( 'sub' ); ?>

<!-- Footer -->

<?php get_footer(); ?>