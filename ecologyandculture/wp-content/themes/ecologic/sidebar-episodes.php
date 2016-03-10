<aside id="episodes-archive">

	<div id="episodes-archive-chpd">

		<h2>Episodes</h2>
		<?php if ( is_active_sidebar( 'episodes' ) ) : ?>

		<?php dynamic_sidebar( 'episodes' ); ?>
		
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