// JavaScript Document
function set_skin_color(){
	
	//top nav, yellow box, yellow text, imgs(new color overlay), bottom fotter, logo and sub logo
	//potential colors. red, blue, green, orange, purple
	
	//#navbar{
		//.y_t
		//#yellow_box,#yellow_box2
		//.pb_c_head
		//.pb_c_button_div
		//#footbar
		//#fixed header
		var color_name = "green";
		var colors = {red:"#b54242", green:"#42b55a", yellow:"#f7fd4e", purple:"#b5429b", orange:"#f8cc45"};
		var color = colors[color_name];
		$("#navbar, #yellow_box, #yellow_box2,.pb_c_button_div,#footbar,#fixed_header").css({"background-color":color});
		$(".y_t,.pb_c_head").css({"color":color});
		
		//imgs 
		//ball bub hand plug tv pen
		//logo_
		//wolfheadtie_
		
			//logo bg 
			$("#logo").css("background","url(images/logo_"+color_name+".png) no-repeat");
			$("#logo").css("background-size","747px 290px");
			//src of wolfheadtie
			$("#wolfheadtie_logo").attr("src","images/wolfheadtie_"+color_name+".png");
			//src of ball_logo,bub_logo,hand_logo,plug_logo,tv_logo,pen_logo
			$("#hand_logo").attr("src","images/icons_web/hand_"+color_name+".png");
			$("#tv_logo").attr("src","images/icons_web/tv_"+color_name+".png");
			$("#bub_logo").attr("src","images/icons_web/bub_"+color_name+".png");
			$("#plug_logo").attr("src","images/icons_web/plug_"+color_name+".png");
			$("#ball_logo").attr("src","images/icons_web/ball_"+color_name+".png");
			$("#pen_logo").attr("src","images/icons_web/pen_"+color_name+".png");
			
			
		
	
}