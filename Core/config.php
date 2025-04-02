<?php

$Folder_Path= dirname($_SERVER["SCRIPT_NAME"]);
$URL_PATH= $_SERVER["REQUEST_URI"];
$END_POINT= substr($URL_PATH,strlen($Folder_Path));

/*  echo "<pre>";

echo "<b>Folder_Path:</b> ".$Folder_Path;
echo "<br>";
echo "<b>URL_Path</b>". $URL_PATH;
echo "<br>";
echo "<b>END_POINT: </b> ". $END_POINT;
echo "<br>";
echo "SERVER". $_SERVER["SCRIPT_NAME"];

echo "</pre>";  */ 

define("_URL",$END_POINT);

?>
