<?php
session_start();
$wsfile = fopen("saved_token.txt", "w") or die("Unable to open file!");

//CSRF token generate
$_SESSION['token'] = md5(uniqid(rand(), TRUE));
$txt = $_SESSION['token'].",";
fwrite($wsfile, $txt);

//create session ID
$session_id = session_id();
setcookie("SesT",$session_id,time()+60*60,'/');
$txt1 = $session_id."\n";
fwrite($wsfile, $txt1);
fclose($wsfile);
echo $_SESSION['token'];

?>