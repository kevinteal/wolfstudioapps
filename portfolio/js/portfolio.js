// JavaScript Document
var color = "#fff";

$(document).ready(function(e) {

	//get current page for quotes
	//$(document).attr('title');
	
	
	setInterval(function(){ quote_changer() }, 5000);
	
	
	$(".portfolio_box").on("mouseover",function(){
		var target = $(this).data("for");
		
		$("#"+target).css({
			"opacity":1,
			"height":"80px"
		});
	});
	
	$(".portfolio_box").on("mouseout",function(){
		var target = $(this).data("for");
		
		$("#"+target).css({
			"opacity":0,
			"height":"0px"
		});
	});
	
});

function quote_changer(){
	var quote = $("#quote_text");
	if(quote.hasClass('quote_text_shadow')){
		quote.removeClass('quote_text_shadow');
		quote.css("color","white");
	}else{
		quote.addClass('quote_text_shadow');
		quote.css("color","#3690ff");
	}
	
}