// JavaScript Document

$(document).ready(function(){
	$(".abc").hover(function(){
		$(this).animate({opacity:0.5}, 100);		
		
		});
	
	$(".abc").mouseout(function(){
		$(this).animate({opacity:1}, 100);		
		
		});



$("#submenu_c").hide();


$("#mobbmenu_c").click(function(){
	$("#submenu_c").slideToggle(300,'easeInOutSine');

	
});


$("#mobbmenu_a").click(function(){
	$("#submenu_c").slideUp(300,'easeInOutSine');

	
});

$("#mobbmenu_b").click(function(){
	$("#submenu_c").slideUp(300,'easeInOutSine');

	
});




$("#mobbmenu_d").click(function(){
	$("#submenu_c").slideUp(300,'easeInOutSine');

	
});


$("#mobbmenu_e").click(function(){
	$("#submenu_c").slideUp(300,'easeInOutSine');

	
});




$(".cc").mouseover(function(){
	$("#about_link").css({"background":"#901e21","color":"#fff","text-shadow":"none"}); 

});

$(".cc").mouseleave(function(){
	$("#about_link").css({"background":"none","color":"#6e6e6e"}); 

});




});










