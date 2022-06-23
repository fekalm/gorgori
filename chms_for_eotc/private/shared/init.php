<?php
define("_shared",dirname(__FILE__));//chms_for_eotc\private\shared
define("_private",dirname(_shared));//chms_for_eotc\private

define("main",dirname(_private));//chms_for_eotc
define("_public",main."\public");//chms_for_eotc\public

$pub = strpos($_SERVER['SCRIPT_NAME'],'/public')+1;
$doc= substr($_SERVER['SCRIPT_NAME'],0,$pub);
define("WWW_ROOT",$doc);

echo WWW_ROOT."</br>";

$pri = strpos($_SERVER['SCRIPT_NAME'],'/private')+10;
$doc1= substr($_SERVER['SCRIPT_NAME'],0,$pub);
define("PRI_ROOT",$doc1);
echo $_SERVER['SCRIPT_NAME']."</br>";
?>