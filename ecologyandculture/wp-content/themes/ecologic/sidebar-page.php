<aside id="page">

	<div id="page-chpd">

		<?php if ( is_active_sidebar( 'page' ) ) : ?>

		<?php dynamic_sidebar( 'page' ); ?>
		
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