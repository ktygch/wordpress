<?php get_header(); ?>
	
	<div id="contents" class="">
		<div class="container">
			<div class="col-xs-12">
				<h2><?php wp_title(''); ?>の一覧</h2>
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
					<p><?php the_time('Y/n/j H:iA'); ?></p>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<?php get_template_part('box', 'contentsfoot');?>
	</div>
	
<?php get_footer(); ?>