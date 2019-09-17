<?php 
if ($_SERVER["HTTP_X_FORWARDED_FOR"] != "") {
$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
$proxy = $_SERVER["REMOTE_ADDR"];
$host = @gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]);

} else {

$IP = $_SERVER["REMOTE_ADDR"];
$host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]);
} 
$host = $_SERVER["HTTP_USER_AGENT"];
?>
<?php 
  echo "$IP\n";
?>
