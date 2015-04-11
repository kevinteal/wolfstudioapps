// JavaScript Document
var color = "#fff";

var festival_quotes = ["Use offline, anytime, anywhere always", "Updated with festival line-up and set times as they are released", "Clash finding helps you plan your day to achieve what you want"];
var cloud_quotes = ["Track your favourite TV shows all in one place", "Never miss a show again!", "Create your own TV guide with the cloud potato"];
var bet_quotes = ["Calculated predictions over 65% correct on match result of win, lose and draw", "Quick access to stats and fixtures for each team", "Always improving with machine learning"];
var drag_quotes = ["User-friendly scrolling on the X and Y axis", "Simple to plug into your website", "Lightweight script, easy to edit and expand"];
var draw_quotes = ["Winner of Sunderland University Facebook app competition in 2011", "Draw fun pictures of your friends and share them for all to see", "Watch out as your friends will get their own back"];
var thought_quotes = ["Organise your thoughts into simple to track thought trails", "Capture text, sound and audio to help with your trails", "Secure data, all user input is kept within phone"];

var quotes = [
	festival_quotes,
	cloud_quotes,
	bet_quotes,
	drag_quotes,
	draw_quotes,
	thought_quotes
	]
	
	
	var qx=0;
	var qi=0;


$(document).ready(function(e) {

	//get current page for quotes
	//$(document).attr('title');
	var page = $("#quote_text").data("page");
	
	switch (page) {
    case "festival":
        qx = 0;
        break;
    case "cloud":
        qx = 1;
        break;
    case "bet":
        qx = 2;
        break;
    case "drag":
        qx = 3;
        break;
    case "draw":
        qx = 4;
        break;
    case "thought":
        qx = 5;
        break;
}
	$("#quote_text").html(quotes[qx][qi]);
	qi=1;
	
	setInterval(function(){ quote_changer() }, 4000);
	
	
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
		$("#quote_text").html(quotes[qx][qi]);
	}else{
		quote.addClass('quote_text_shadow');
		quote.css("color","#3690ff");
		$("#quote_text").html(quotes[qx][qi]);
	}
	qi++;
	qi = (qi==3) ? 0 : qi;
	
}

function scrollme(where){
	var location = $("#"+where).offset();
	var locationy = location.top;
	$("body").animate({ scrollTop: locationy },1500);
	
}
