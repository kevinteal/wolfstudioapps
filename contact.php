<?php
$user_email = $user_message = $user_name = "";
$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["user_name"])) {
     $error = true;
   }else{
	   $user_name = $_POST["user_name"];
   }
   
    if (empty($_POST["user_message"])) {
      $error = true;
   }else{
	  $user_message = $_POST["user_message"];
   }
   
    if (empty($_POST["user_name"])) {
      $error = true;
   }else{
	   $user_email = $_POST["user_email"];
   }
   
   if($error==false){
	   //send mail
	   $to = "kevin.teal1@gmail.com";
		$subject = "Message from wolfstudioapps!";
		$txt = $user_message;
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: ".$user_email." ";
		
		mail($to,$subject,$txt,$headers);
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
            <?php if($error){
				echo "All Fields are Required*";
			}?>
            <form id="messageme"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            	<div class="contactpage_row"><div class="row_title">Name:</div><div class="row_input"><input type="text" name="user_name" placeholder="Your Name Here..."  value="<?php echo $user_name; ?>" ></div></div>
                
                <div class="contactpage_row extra_row_height"><div class="row_title">Message:</div><div class="row_input"><textarea rows="12" cols="55" name="user_message" placeholder="Your Message Here..." ><?php echo $user_message; ?></textarea> </div></div>
                
                <div class="contactpage_row"><div class="row_title">Email:</div><div class="row_input"><input type="email" name="user_email" placeholder="Your Email Address Here..." value="<?php echo $user_email; ?>" ></div></div>
                
                <div class="contactpage_row"><div class="row_title"></div><div class="row_input"><input type="submit" name="submit_btn" value="Send" ></div></div></form><?php if($error==false && $_SERVER["REQUEST_METHOD"] == "POST"){
					echo "Message Sent, Thank you.<br/><a href='index.php'>Return to Main Page</a>";
				}
				?>
            </div>
            <div id="contactpage_img"></div>
        
        </div>
    </div>
</body>
</html>