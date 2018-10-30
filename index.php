<?php include "inc/header.php"; ?>


<?php

include_once "system/libs/Main.php";

$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode("/", $url);

include 'app/controllers/'.$url[0].'.php';
$ariyan = new $url[0]();


/*
echo $controller = $url[0]."<br/>";
echo $method = $url[1]."<br/>";
echo $param = $url[2]."<br/>";

echo "<pre>";
print_r($url);
echo "</pre>";


*/
?>
















<?php include "inc/footer.php"; ?>