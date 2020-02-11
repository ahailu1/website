<?php

class baseController {
//basically you  get the models and views by requesting their filenames
//once you get it you create functions

public function __construct(){
    
}

//load model
public function model($model)
{
//require model file
require_once "Model/" . $model . ".php";

//instantiate model
return new $model();
}

// load the view file. the oconstroller can access it
public function view($view, $data = []){

if(file_exists("View/" . $view . ".php")){

require_once "View/" . $view . ".php";
}
else {
die("view does not exist");
}
}
}