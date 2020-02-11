<?php
class Login extends baseController{

public function __construct()
{
    //load model
$this->userLogin = $this->model("user");
}

public function authenticate(){

if($_SERVER["REQUEST_METHOD"] = "POST"){

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$data = [
    "username" => $_POST["username"],
    "password" => $_POST["password"],
    "username_error" => "",
    "password_error" =>"",
    "session" =>"Create Account",
    "login" => "Login",
    "ahref" => "?url=login/authenticate",
    "homeahref" => "?url=createaccount/register"

];



if(empty($data["username"])){
$data["username_error"] = "please enter username";
}
else if(empty($data["username"]) && (!$this->userLogin->findPassword())){
$data["password_error"] = "";
}
else if (!$this->userLogin->findUsername($data)){
    $data["username_error"] = "username not found";
    $data["password_error"] = "";
    }
else {
$data["username_error"] = "";
    }


if(empty($data["password"])){
$data["password_error"] = "please enter password";
$this->view("login", $data);
}   
else if(!$this->userLogin->findPassword($data) ){   

    $data["password_error"] = "wrong password";

    $this->view("login", $data);
}
else{
    $data["password_error"] = "";
}


if(empty($data["username_error"]) && empty($data["password_error"])     ){
$userisLoggedIn = $this->userLogin->login($data);

$this->logSession($userisLoggedIn);

}

}

//if($this->userLogin->getUser($data)){
else {
    $data = [
        "username" => "",
        "password" => "",
        "username_error" => "",
        "password_error" =>"",
        "session" =>"adsda",
        "login" => "login",
        "ahref" => "?url=login/authenticate",
        "homeahref" => "#"

            ];
    
$this->view("login", $data);
    }
}

public function logSession($modelfunction){
$_SESSION["userId"] = $modelfunction->username;
$_SESSION["user_email"] = $modelfunction->email;
$data["session"] = $_SESSION["userId"];
reroute("home/homey");

}
public function logout(){
    unset($_SESSION["userId"]);
    unset($_SESSION["email"]);
session_destroy();
reroute("home/homey");
}

}

