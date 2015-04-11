<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Wolf Studio Apps develops innovative, effective and creative web apps for clients based in sunderland north east uk. Working with javascript, jquery, php, html and mysql to create unique websites, mobile apps and applications. Drag Plugin.js is designed to make horizontal scrolling on PC more user friendly." />
<meta name="viewport" content="initial-scale=1">
<title>Wolf Studio Apps | DragPlugin.js</title>
<link rel="stylesheet" href="../css/portfolio.css"/>
<link rel="icon" href="../../images/wolf-icon.png" type="image/png">
<script type="text/javascript" src="../../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/portfolio.js"></script>
</head>

<body>
<div id="logo_fixed"><img src="../../images/wolfheadtie_red.png" height="40" width="22" /></div>
<div id="wrapper">
<div id="title_bg" class="drag_plugin_bg"></div>
<div id="main_feature">
			<div id="main_content">
            DRAG PLUGIN.js<br/>
            <hr class="style-two"/>
           <span id="nav_links"> <span onclick="scrollme('about')">About</span> | <span onclick="scrollme('features')">Features</span> | <span onclick="scrollme('vid')">Video</span> </span>
           <div id="quote"><div class="quotes"><img src="../css/quote.png" width="36" height="32" /></div><div id="quote_text"  data-page="drag">Some random quote about this app or product, something positive or a feature</div><div class="quotes"><img src="../css/quote1.png" width="36" height="32" /></div></div>
           <br/><img id="arrow" src="../css/arrow.png" width="60" height="37" /> 
            </div>
</div>
<div id="about" class="text_single faded_bg"><hr class="style-one">DragPlugin.js is designed to make horizontal scrolling on computers more user-friendly. By allowing scrollable content to be dragged.<hr class="style-one"></div>


<div id="features" class="feature_box"><div class="feature_left"><div class="feature_img drag_feature_bg"><img class="extra_margin" src="images/swoosh_BW.png" width="370" height="107"/> </div></div><div class="feature_right">
With <span class="blue_text">Drag Plugin</span>, content can be  <span class="blue_text">easily scrolled</span> on the <span class="blue_text">X or Y axis</span>. Mainly used for horizontal scrolling, the plugin allows content to be <span class="blue_text">dragged</span> by any area of itself rather than just the scroll bars. 

</div></div>

<div class="feature_box"><div class="feature_right">
The plugin allows the developer to set the <span class="blue_text">speed of scrolling</span> and the <span class="blue_text">direction</span>. The developer must place the scrollable content within a wrapper. For greater user ability it is recommended to set the text selection property of the element to none and change the mouse curser to a hand. 
</div><div class="feature_left"><div class="feature_img drag_feature_bg"><img src="images/engine.png" width="256" height="256" /></div></div></div>

<div class="feature_box"><div class="feature_left"><div class="feature_img drag_feature_bg"><img src="images/plug.png" width="300" height="300" /></div></div><div class="feature_right">
Set up and use of the plugin is <span class="blue_text">simple</span>; Download the code <a href="drag_plugin.zip">here</a> and link it to your project. Then call the plugin on the selected element like so…<br/>
<span class="small_text">
$(element).drag_plugin({
Speed:25,
Direction:’x’
}); </span>
</div></div>


<div id="vid" class="text_single faded_bg"><hr class="style-one">Below is a video showcasing the drag plugin in action, and also the code of how it works, and how it is implemented.

<hr class="style-one"></div>


<div id="vid_box" class="drag_bg_tiny">
    <video width="1080" height="550" controls> 
        <source src="video/drag_plugin.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<div class="text_single extra_height"> <div class="portfolio_side left_p"></div><div class="portfolio_cen">PORTFOLIO</div><div class="portfolio_side right_p"></div> <br/><br/>

<div class="portfolio_box no_margin" data-for="info_box1">
    <a href="../festival_day_planner/index.php"><img src="../css/hand.png" width="118" height="150" ></a>
    <div class="info_box" id="info_box1" ><span class="title_portfolio">Festival Day Planner</span><br/><span class="text_portfolio">An offline mobile app for festival tracking.</span></div>
</div>
<div class="portfolio_box" data-for="info_box2">
	<a href="../thought_trail/index.php"><img src="../css/bub.png" width="192" height="150" /></a>
    <div class="info_box" id="info_box2" ><span class="title_portfolio">Thought Trail</span><br/><span class="text_portfolio">A mobile app storing thoughts and ideas</span></div>
</div>
<div class="portfolio_box" data-for="info_box3">
	<a href="../cloud_potato/index.php"><img src="../css/tv.png" width="150" height="150" /></a>
    <div class="info_box" id="info_box3" ><span class="title_portfolio">The Cloud Potato</span><br/><span class="text_portfolio">A web and mobile app for tracking tv shows</span></div>
</div>
<div class="portfolio_box" data-for="info_box4">
	<a href="../bet_penguin/index.php"><img src="../css/ball_green.png" width="150" height="150" /></a>
    <div class="info_box" id="info_box4" ><span class="title_portfolio">Bet Penguin</span><br/><span class="text_portfolio">A mobile app that predicts football results</span></div>
</div>
<div class="portfolio_box" data-for="info_box5" >
	<a href="../drawcam/index.php"><img src="../css/pen.png" width="150" height="150" /></a>
    <div class="info_box" id="info_box5" ><span class="title_portfolio">Drawcam</span><br/><span class="text_portfolio">A facebook drawing app</span></div>
</div>
<div class="full_width">
<hr class="style-one">
</div>
</div>


</div>
<div id="fwrapper" class="drag_bg_tiny">
<div id="footer">
	<div class="foot_content sink"><a href="../../index.php"><img src="../css/home.png" width="304" height="300" /></a></div>
    <div class="foot_content"><img src="../css/wolftie.png"  width="164"  height="300"/></div>
    <div class="foot_content sink"><img src="../css/at.png" width="304" height="300" /></div>
    <div id="footer_bar"><div id="footer_con">WolfStudioApps is an independent sole trader based in Sunderland, UK</div></div>
</div><!-- new footer wrapper to get 100% bg color -->
</div>
</body>

</html>