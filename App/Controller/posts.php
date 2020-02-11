<?php

$uri = var_dump(trim($_SERVER["REQUEST_URI"], "/"));
trim($uri,"/");
echo $uri;


$hello = new PDO("mysql:host=localhost;dbname=portfolio",
"localhost", "");

$objecty = $hello->prepare("SHOW TABLES");

$objecty->execute();

while($rows = $objecty->fetch(PDO::FETCH_ASSOC)){
    var_dump($rows);
}