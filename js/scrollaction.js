// JavaScript Document
$(function() {
	var showFlag = false;
	var topBtn = $('#page-top');
	topBtn.css('bottom', '-50px');
	var showFlag = false;
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			if (showFlag == false) {
				showFlag = true;
				topBtn.stop().animate({'bottom' : '0px'}, 200);
			}
		} else {
			if (showFlag) {
				showFlag = false;
				topBtn.stop().animate({'bottom' : '-50px'}, 200);
			}
		}
	});
	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
	
	//トップスクロールボタン
	var scrollDown = $('.scrolldown');
	var winH = $(window).height();
	scrollDown.click(function(){
		$('body,html').animate({
			scrollTop: winH
		}, 1000);
		return false;
	});
});