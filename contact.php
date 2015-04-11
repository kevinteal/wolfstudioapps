<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["user_name"])) {
     echo "Name is required";
   }else{
	   echo $_POST["user_name"];
   }
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Wolf Studio Apps develops innovative, effective and creative web apps for clients based in sunderland north east uk. Working with javascript, jquery, php, html and mysql to create unique websites, mobile apps and applications " />
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" href="css/wolf.css" />
<link rel="stylesheet" href="css/contact.css" />
<link rel="icon" href="images/wolf-icon.png" type="image/png">

<title>Wolf Studio Apps | Contact</title>
</head>

<body>
    <div id="wrapper">
        <div id="contactpage_box">
        	<div id="contactpage_message">
            <form id="messageme"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            	<div class="contactpage_row"><div class="row_title">Name:</div><div class="row_input"><input type="text" name="user_name" placeholder="Your Name Here..."></div></div>
                
                <div class="contactpage_row extra_row_height"><div class="row_title">Message:</div><div class="row_input"><textarea rows="12" cols="55" name="user_message" placeholder="Your Message Here..." ></textarea> </div></div>
                
                <div class="contactpage_row"><div class="row_title">Email:</div><div class="row_input"><input type="email" name="user_email" placeholder="Your Email Address Here..." ></div></div>
                
                <div class="contactpage_row"><div class="row_title"></div><div class="row_input"><input type="submit" name="submit_btn" value="Send" ></div></div></form>
            </div>
            <div id="contactpage_img"></div>
        
        </div>
    </div>
</body>
</html>