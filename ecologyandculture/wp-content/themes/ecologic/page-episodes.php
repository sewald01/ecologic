<?php get_header(); ?>

<!-- Start Page Content -->
<div id="episodes-wrapper">
	<?php query_posts("offset=0"); ?>
	<?php while (have_posts()) : the_post(); ?>
		<div id="episodes-wrapper-ch">
			<div class="recent-image">
				<div class="recent-image-chpd">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
						<h2 class="recent-image-title"><?php the_post_thumbnail_title(); ?></h2>
						<h3 class="recent-image-desc"><?php the_post_thumbnail_description(); ?></h3>
					</a>	
				</div>
			</div>
			<div class="recent-desc">
				<div class="recent-desc-chpd">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><em>Continue reading »</em></a>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<!-- End Page Content -->

<!-- Post Sidebar -->

<?php get_sidebar( 'episodes' ); ?>

<!-- End Post Sidebar -->

<?php get_footer(); ?>