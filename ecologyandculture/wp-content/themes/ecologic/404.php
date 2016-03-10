<?php get_header(); ?>

<!-- Start Page Content -->
<div id="episodes-wrapper">
	<div id="search-wrapper-ch">

		<h2>Error 404</h2>
		<p>We're sorry, but the page you are looking for may have been moved.</p>
		
		<p>Try searching for what you were looking for:</p>
		
		<?php get_search_form(); ?>
	   
	</div>
</div>
<!-- End Page Content -->

<!-- Post Sidebar -->

<?php get_sidebar( 'episodes' ); ?>

<!-- End Post Sidebar -->

<?php get_footer(); ?>