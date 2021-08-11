<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>
<?php
// sys.argv = [sys.argv[0]];


// var_dump($argv);
$url = "https://api.icq.net/bot/v1//messages/sendText/?token=".$argv[1]."&chatId=". $argv[2]."&text=" .$argv[3];
// $url = "https://api.icq.net/bot/v1//messages/sendText/?token=001.3973770060.0620837511:760696062&chatId=AoLGq6l3anVfVp2hlXw&text=texting";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);




?>