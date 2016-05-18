<?php 
/*
Template Name: SST Page Template-A
*/
?>
<?php get_header(); ?>
	
	<?php /*page.php*/ ?>
	<div id="contents" class="">
	
		<div class="container-fluid">
			<div class="feature page">
				<div class="row">
					<div class="col-md-10 col-md-push-1 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-sm-10 col-sm-push-1 col-xs-12 text-center">
								<?php if(have_posts())while(have_posts()):the_post(); ?>
									<?php if (has_post_thumbnail()){
											$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
									}?>
									<span style="background-image: url(<?php echo $image_url[0]; ?>);" class="pic"></span>
									<h2 class="title">	<?php the_title(); ?></h2>
									<?php the_content(); ?>
									<div class="text-right">
										<span class="date"><?php the_date('Y.n.d'); ?></span>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php /*get_template_part('box', 'contentsfoot');*/ ?>
		
	</div>
	
<?php get_footer(); ?>