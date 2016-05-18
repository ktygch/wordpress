// JavaScript Document
$(function(){
	var topH1 = $('#headH1').offset().top;
	var winH = $(window).height();
	var logoH = $('#topLogo').height();
	
	$('#topLogo').css({
		'top': winH/2,
		'margin-top': -((logoH/2)+7)
	});
	$('#topLogo span').css({
		'padding-top': logoH
	});
	
	$(window).on('scroll', function(){
		var scrollValue = $(this).scrollTop();
		$('#topLogo')
		.trigger('customScroll', {posY: scrollValue});
	});
	
	$('#topLogo')
	.each(function(){
		var $this = $(this);
		$this.data('initial', $this.offset().top);
	})
	
	.on('customScroll', function(event, object){
		var $this = $(this);
		
		if($this.data('initial') <= object.posY){
			if(!$this.hasClass('fixed')){
				var $substitute = $('<div></div>');
				$substitute
				.css({
					'margin':'0',
					'padding':'0',
					'font-size':'0',
					'height':'0'
				})
				.addClass('substitute')
				.height($this.outerHeight(true))
				.width($this.outerWidth(true));
				
				$this
				.after($substitute)
				.addClass('fixed')
				.css({top: 0});
				$('#topLogo span').animate(
					{
						'padding-top': '130px'
					},
					{
						duration: 'slow',
						easing: 'linear'
					}
				);
			}
		} else {
			$this.next('.substitute').remove();
			$this.removeClass('fixed');
			$this.css({top: winH/2});
			$('#topLogo span').css(
				{
					'padding-top': logoH
				}
			);
		}
	});
});