<?php get_header(); ?>

<!-- Start Page Content -->
<div id="content" class="page">
	<div id="post-wrapper">
		<div id="post-wrapper-ch">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?>:</h1>
				<?php the_content('<p class="serif">More &raquo;</p>'); ?>
				<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
				
				<?php wp_link_pages(); ?>
			</div>
		   
			<?php endwhile; endif; ?>  
		</div>
	</div>
</div>
<!-- End Page Content -->

<!-- Post Sidebar -->

<?php get_sidebar( 'page' ); ?>

<!-- End Post Sidebar -->

<?php get_footer(); ?>