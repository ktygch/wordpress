// JavaScript Document

$('.section').css({position:'relative', top:'8px', opacity: 0});

var i = 0;
var length = $('.section').length;
var int;

function doThis(){
	if(i >= length){
		clearInterval(int);
	}else{
		$('.section').eq(i).stop().animate({top:'0px', opacity: 1}, 600);
		i++;
	}
}
 
$(function(){
	$('#posts').waypoint(function(){
		var int = setInterval('doThis(i)', 500);
	},{
		offset : '95%'
	});
});