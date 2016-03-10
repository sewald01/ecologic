<?php get_header(); ?>

<!-- Start Post Content -->

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="content" class="single">
		
	<div id="post-wrapper">
		<div id="post-wrapper-ch">
		
		<div id="post-spotlight">
			<?php the_post_thumbnail(); ?>
			<h1 id="post-spotlight-title"><?php the_title(); ?></h1>
			<h2 id="post-spotlight-desc"><?php the_post_thumbnail_description(); ?></h2>
		</div>
		
			<strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
			<?php /*
				<h2><?php the_title(); ?></h2>     
			<p class="postmetadata">
				<span class="date">Posted on <?php the_time('F jS, Y') ?> at <?php the_time('g:i a'); ?></span> in 
				<span class="cat"><?php the_category(', ') ?></span>
				<span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
			</p>
			*/ ?>
			<?php the_content('More &raquo;'); ?>
			
				<!-- <nav class="post-nav">            
					<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
					<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
				</nav> -->
			<?php /*
			<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
			<?php comments_template(); ?>
			*/ ?>
		</div>
	</div>
		<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
<!-- End Post Content -->

<!-- Post Sidebar -->

<?php get_sidebar( 'post' ); ?>

<!-- End Post Sidebar -->

<!-- Footer -->

<?php get_footer(); ?>