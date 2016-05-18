<?php get_header(); ?>

	<?php /*single.php*/ ?>
	<div id="contents" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-push-1 col-sm-12 col-xs-12">
					<div class="single_post">
						<?php if(have_posts()): ?>
								<?php the_post(); ?>
								<div class="row">
									<div class="col-sm-10 col-sm-push-1 col-xs-12 text-center">
										<?php $thumbnail_id = get_post_thumbnail_id(); ?>
										<?php $eye_img = wp_get_attachment_image_src( $thumbnail_id , 'full' ); ?>
										<?php list($src) = $eye_img; ?>
										<p style="background-image: url(<?php echo $src; ?>);" class="pic"></p>
										<h2><?php the_title(); ?></h2>
										<?php the_content(); ?>
										<div class="text-right">
											<span class="date"><?php the_date('Y.n.d'); ?></span>
										</div>
									</div>
								</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part('box', 'contentsfoot');?>
		
	</div>
	
<?php get_footer(); ?>