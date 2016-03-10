<?php get_header(); ?>

<!-- Spotlight Latest Episode -->
<div id="main2">
<?php $recentpost = new WP_Query("showposts=1"); while($recentpost->have_posts()) : $recentpost->the_post(); ?>
	<div id="spotlight-image">
		<div id="spotlight-image-chpd">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(); ?>
				<h1 id="spotlight-image-title"><?php the_title(); ?></h1>
				<h2 id="spotlight-image-desc"><?php the_post_thumbnail_description(); ?></h2>
			</a>
		</div>
	</div>
	<div id="spotlight-desc">
		<div id="spotlight-desc-chpd">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><h1><?php the_title(); ?>: Austria's Turn to...</h1></a>
			<?php the_excerpt(); ?>
			<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/243793677&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
		</div>
	</div>
<?php endwhile; ?>

<!-- Recent Episodes -->

<div id="rec-wrapper">
	<?php query_posts("offset=1"); ?>
		<?php while (have_posts()) : the_post(); ?>
			<div id="rec-wrapper-ch">
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
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><em>Listen and continue reading »</em></a>
					</div>
				</div>
			
		<?php endwhile; ?>
			<div id="rec-wrapper-ch">
				<div class="recent-image">
					<div class="recent-image-chpd">
						<a href="http://www.ecologicradio.org/about/"><img src="<?php bloginfo('template_directory'); ?>/images/ecologic-radio-logo-box-edit.png"></a>
					</div>
				</div>
				<div class="recent-desc">
					<div class="recent-desc-chpd">
						<a href="http://www.ecologicradio.org/about/"><h2>Introducing: <em>Ecologic Radio</em>!</h2></a>
						<p>Welcome to Ecologic, a public radio show devoted to investigating social issues through science. Dedicated to premier radio journalism that is cinematic in quality in scope, Ecologic tries to reach audiences that are traditionally underserved by science journalism.
					</div>
				</div>
			</div>
		</div>
</div>

<!-- Sub-Sidebar -->

<?php get_sidebar( 'sub' ); ?>

<!-- Footer -->
</div>
<?php get_footer(); ?>