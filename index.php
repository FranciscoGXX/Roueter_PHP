<?php

declare(strict_types=1);

echo "iNDEX";
echo "<br>";


require_once "./Core/config.php";
require_once "./Core/App.php";

$url= explode("/",_URL);
var_dump($url);

$_App= new App();
$_App->Run();




?>