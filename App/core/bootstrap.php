<?php
require_once "helpers/urls.php";
require_once "helpers/sessions.php";
//autoload core libraries
spl_autoload_register(function($className){
require_once "core/" . $className . ".php";
});

//$tables= $app["database"]->selectAll("users");
 

//$insert = $app["database"]->insert($tables, $data);
