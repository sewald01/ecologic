<?php get_header(); ?>

<!-- Start Page Content -->
<div id="episodes-wrapper">
	<?php if (have_posts()) : ?>
	<?php $post = $posts[0]; ?>
	<?php if (is_category( 'episodes' )) { ?>
		<?php /* <h2 class="pagetitle"><?php single_cat_title(); ?></h2> */ ?>
 	<?php } ?>
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
		<nav class="post-nav">
			<?php posts_nav_link(' || ','Newer Posts','Older Posts'); ?>
		</nav>
		
		<?php else : ?><div id='search-wrapper-ch'><?php
			if ( is_category() ) {
				printf("<h2 class='center'>%s</h2>", single_cat_title('',false));
				printf("<p class='center'>Sorry, but there aren't any posts in the %s category yet.</p>", single_cat_title('',false));
			} else {
				echo("<p class='center'>No posts found.</p>");
			}
			get_search_form();
		
		?></div><?php endif; ?>
		
</div>
<!-- End Page Content -->

<!-- Post Sidebar -->

<?php get_sidebar( 'episodes' ); ?>

<!-- End Post Sidebar -->

<?php get_footer(); ?>