<?php

function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
    
}

$redirection = "no";
$redirect = "token";
$allow_country = "yes";
$api_protection = "no";  			   
$Key = "qbWXU91UB159yMrID1GnlRwDWbojYa4Y"; 
$anti_proxy = "yes";
$anti_vpn = "yes";
$anti_tor = "yes";
$anti_web_crawler ="yes";
$max_fraud_score = "101";

?>