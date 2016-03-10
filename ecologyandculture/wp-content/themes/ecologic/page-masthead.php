<?php get_header(); ?>

<!-- Start Page Content -->
<div id="content" class="masthead">
	<div id="masthead-wrapper">
		<div id="masthead-wrapper-ch">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>">
				<?php the_content('<p class="serif">More &raquo;</p>'); ?>
				<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
				
				<?php wp_link_pages(); ?>
			</div>
		   
			<?php endwhile; endif; ?>  
		</div>
	</div>
</div>
<!-- End Page Content -->

<?php get_footer(); ?>