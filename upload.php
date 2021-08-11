<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>

<?php

$botId =$_POST['token'];
$chatId=$_POST['chatid'];
$text =$_POST['text'];
$time=$_POST['s_time'];
$date=$_POST['s_date'];

// $originalDate = "2010-03-21";
$date = date("m-d-Y", strtotime($date));
$string = "\"php test.php ".$botId." ".$chatId ." ".$text . "\" | at ".$time." PM ".$date ;
// $command ="echo \"". $string ."\" | at 12:11 PM 08/09/2021";

// $command ='echo "php text.php '.$botId.' '.$chatId .' '.$text.  '| at 11:42 AM 08/09/2021';
//echo "php /PATH/TO/script.php" | at 2:30 PM 05/22/2019
// $command2 ='echo "php test.php" | at 11:25 PM 08/09/2021';
// $output=shell_exec($command2);

var_dump(shell_exec($string. " 2>&1"));
// echo $output;
print_r($_POST);


?>