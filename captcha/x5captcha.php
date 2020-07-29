<?php
include("../res/x5engine.php");
$nameList = array("ll3","53f","jmp","uem","wpr","fs7","htw","elg","wya","w6d");
$charList = array("P","3","V","Z","F","S","J","Y","F","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
