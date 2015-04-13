// JavaScript Document
var inmotion = false;
var fixed_show = false;

$(document).ready(function(e) {
	var window_len = $(document).width();
	console.log("window_len: "+window_len);
	set_skin_color();
	$(document).on("scroll", function(){
		if($(document).scrollTop()>300){
			if(fixed_show==true){
				console.log("already shown");
			}else{
				$("#fixed_header").css("display","block");
				$("#fixed_header").animate({
					top:0
				},1000);
			}
			fixed_show=true;
		}else{
			if(fixed_show==false){
				console.log("already hiden");
			}else{
				console.log(fixed_show);
				
				$("#fixed_header").animate({
					top:-80
				},1000, function(){
					$("#fixed_header").css("display","none");
				});
			}
			fixed_show=false;
		}
	});
	
	$("#pb1").drag_plugin({
		speed:25,
		direction:'y'
	});
	$("#pb2").drag_plugin({
		speed:25,
		direction:'y'
	});
	$("#pb3").drag_plugin({
		speed:25,
		direction:'y'
	});
	$("#pb4").drag_plugin({
		speed:25,
		direction:'y'
	});
	$("#pb5").drag_plugin({
		speed:25,
		direction:'y'
	});
	$("#pb6").drag_plugin({
		speed:25,
		direction:'y'
	});
	
	$("#pb1,#pb2,#pb3,#pb4,#pb5,#pb6").on('mousewheel', function(e){
		 e.preventDefault();
    	 e.returnValue=false;
	});
		
		
	$(".pbb1, .pbb2,.pbb3, .pbb4,.pbb5, .pbb6").click(function(){
        $(this).parent().parent().animate({ scrollTop: "200px" });
    });		
	
	$("#yellow_box2").mouseenter(function(){
		
			if(!$("#d_rev").hasClass("hover")){
					$("#d_rev").addClass("hover");
					
					setTimeout(function() {
					$("#d_rev").removeClass("hover");
				  
					}, 2300);
				}
		});
		
	
});

function scrollme(where){
	var location = $("#"+where).offset();
	var locationy = location.top;
	$("body,html").animate({ scrollTop: locationy },1500);
}

