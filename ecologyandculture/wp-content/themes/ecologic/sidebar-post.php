<aside id="post">

	<div id="post-chpd">

		<?php if ( is_active_sidebar( 'post' ) ) : ?>

		<?php dynamic_sidebar( 'post' ); ?>
		<? /*
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		
			<nav class="post-nav">            
				
				<div class="alignleft">
				
				<?php get_the_post_thumbnail(get_previous_post()->ID, 'thumbnail'); ?>
				
				<?php previous_post_link('&laquo; %link', '%title', true) ?></div>
				<div class="alignright"><?php
				
				
				$nextThumb = get_the_post_thumbnail(get_next_post()->ID, 'thumbnail'); ?>
				
				<img src="<?php get_permalink($nextThumb->ID) ?>">
				
				<?php next_post_link('%link &raquo;', '%title', true) ?></div>
			</nav>
		
		<?php endwhile; ?>
		
		<?php endif; ?>
		
		*/?>
			
		<?php else : ?>
		
			<?php get_search_form(); ?> 
		
			<!-- Begin Categories -->
			<h3>Categories</h3>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
			<!-- End Categories -->

		<?php endif; ?>
	
	</div>
	
</aside>