<?php

Class request{
protected $currentController = "defaultPage";
protected $currentMethod = "index";
protected $params = [];
protected $backUpController = "default";
public function __construct(){

$url = $this->getUrl();
//check if file exists
if(file_exists("Controller/" . $url[0] . ".php"))
{
$this->backUpController = $url[0];
$this->currentController = $url[0];
unset($url[0]); 
// set the current controller to the file
//require file
require_once "Controller/" . $this->currentController . ".php";


$this->currentController = new $this->currentController;
}
//check for second part of url
if(isset($url[1])){

//check for second part of url which will act as the function
if(method_exists($this->currentController, $url[1])){
//first parameter is the name of the class which and the second is the name of the function

$this->currentMethod = $url[1];
unset($url[1]);
}

$this->params = $url ? array_values($url) : [];
// returns empty array in both cases;
//call a callback with array of parameters

call_user_func_array([$this->currentController, $this->currentMethod],$this->params);
}
}

public function getUrl(){ 
if(isset($_GET["url"]))
    {
$url = rtrim($_GET["url"], "/");

$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode("/",$url);
return $url;
}
}
}

