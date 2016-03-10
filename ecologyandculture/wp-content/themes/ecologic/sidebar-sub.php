<aside id="sub">

	<div id="sub-chpd">

		<?php if ( is_active_sidebar( 'sub' ) ) : ?>

		<?php dynamic_sidebar( 'sub' ); ?>
		
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