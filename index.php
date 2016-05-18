<?php get_header(); ?>
	
	<div id="contents" class="top">
		
		<div id="topPost" class="container">
			<h2>POST</h2>
			<div class="row">
				<!-- Team item -->
				<?php $news = get_posts('posts_per_page=3'); ?>
				<?php foreach($news as $post): ?>
					<?php setup_postdata($post); ?>
					<div class="col-md-4 col-sm-4">
					
						<div class="thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php
									$image_id = get_post_thumbnail_id();
									$image_url = wp_get_attachment_image_src($image_id, true);
								?>
								<span class="img" style="background-image: url(<?php echo $image_url[0]; ?>)"></span>
								<h3 class="mono"><?php the_title(); ?></h3>
								<p>
									<span class="date"><?php the_date('Y.n.d'); ?></span>
								</p>
							</a>
						</div>
					
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<!-- Team item --> 
			</div>
		</div>
		
		<?php get_template_part('box', 'contentsfoot');?>
		
	</div>
		
<?php get_footer(); ?>