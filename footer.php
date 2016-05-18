	</div>
	<!-- .wrapper END -->
	
	<div id="page-top">
		<a href="#">TOP</a>
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/loader.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/scrollaction.js"></script>
	<?php if(is_front_page()): ?>
		<script src="<?php bloginfo('template_directory'); ?>/js/toppage.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.waypoints.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/waypoints.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.sliderPro.min.js"></script>
		<script>
			$(document).ready(function(){
				$( '#slider1' ).sliderPro({
					width : "100%",
					height : 166
				});
			});
		</script>
		<?php if(wp_is_mobile()): ?>
		<?php else: ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php /*<script src="<?php bloginfo('template_directory'); ?>/js/patternizer.js"></script>*/ ?>
	<?php /*
	<script type="text/javascript">
		var bgCanvas = document.getElementById('bgCanvas');
		
		function render() {
			bgCanvas.patternizer({
				stripes : [ 
				{
				color: '#000000',
				rotation: 90,
				opacity: 100,
				mode: 'normal',
				width: 2,
				gap: 1,
				offset: 0
				},
				{
				color: '#555555',
				rotation: 0,
				opacity: 100,
				mode: 'normal',
				width: 1,
				gap: 15,
				offset: 0
				}
				],
				bg : '#ffffff'
			});
		}
		
		// resize the canvas to the window size
		function onResize() {
		
			// number of pixels of extra canvas drawn
			var buffer = 100;
			
			// if extra canvas size is less than the buffer amount
			if (bgCanvas.width - window.innerWidth < buffer ||
			bgCanvas.height - window.innerHeight < buffer) {
				
				// resize the canvas to window plus double the buffer
				bgCanvas.width = window.innerWidth + (buffer * 2);
				bgCanvas.height = window.innerHeight + (buffer * 2);
				
				render();
			}
		
		}
		
		function init() {
			onResize();
		}
		
		init();
	</script>
	*/ ?>
	
	<?php wp_footer(); ?>
</body>
</html>