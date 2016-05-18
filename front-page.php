<?php get_header(); ?>
	
	<div id="contents" class="top">
	
		<?php if($page = get_page_by_path('nextparty')): ?>
			<div class="container-fluid">
				<div class="feature">
					<div class="row">
						<div class="text-center">
							<?php if(has_post_thumbnail($page->ID)): ?>
								<?php 
									$eye_img = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full' );
									list( $src) = $eye_img; 
								 ?>
								<a href="<?php echo get_page_link($page->ID); ?>" style="background-image: url(<?php echo $src; ?>);" class="pic"></a>
							<?php endif; ?>
							<h2 class="title"><?php echo $page -> post_title; ?></h2>
							<p><?php echo $page -> post_content; ?></p>
							
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
		<div id="topMusic" class="container-fluid">
			<h2>MUSIC</h2>
			<div class="row">
				<div class="col-sm-8 col-sm-push-2">
					<?php if($page = get_page_by_path('topmusic01')): ?>
						<?php /*<h2><?php echo $page -> post_title; ?></h2>*/ ?>
						<?php echo $page -> post_content; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
		<div id="topPost" class="container">
			<h2>POST</h2>
			<div id="posts" class="row">
				<!-- Team item -->
				<?php $news = get_posts('posts_per_page=3'); ?>
				<?php foreach($news as $post): ?>
					<?php setup_postdata($post); ?>
					<div class="col-md-4 col-sm-4 section">
					
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