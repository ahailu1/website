<?php

class createaccount extends baseController {
    
 public function __construct(){
     
$this->userModel = $this->model("user");

 }   


public function register(){
//SANITIZE DATA    

if($_SERVER["REQUEST_METHOD"] == "POST"){

$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$data = [
"username" => $_POST["uid"],
"email" => $_POST["email"],
"password" => $_POST["pwd"],
"pwd-repeat" => $_POST["pwd-repeat"],
"username_error" => "",
"email_error" => "",
"password_error" => "",
"confirm_error" => "",
"session" => "Register",
"login" => "Login",
"ahref" => "?url=login/authenticate",
"homeahref" => "?url=createaccount/register"

];
//validate email
if(empty($data["email"]))
{
$data["email_error"] = "please enter email";
}   
else {
    //check email
if($this->userModel->findUserByEmail($data["email"])){
  $data["email_error"] = "email is already taken";  
}
}

//validate username
if(empty($data["username"]))
{
$data["username_error"] = "please enter username";
} else{
if($this->userModel->findUsername($data)){
$data["username_error"] = "username is already taken";
}
}

//validate password
if(empty($data["password"])){
$data["password_error"] = "please enter password";
} elseif(strlen($data["password"]) < 6){
$data["password_error"] = "password must be at least 6 characters";
}

//validate confirm password
if(empty($data["pwd-repeat"])){
$data["password_error"] = "please confirm password";
}else {
if ($data["pwd-repeat"] != $data["password"]){
$data["confirm_error"] = "passwords don't match";
}
}

//make sure errors are empty
if(empty($data["email_error"]) && empty($data["username_error"]) &&
empty($data["password_error"]) && empty($data["confirm_error"])){
    //VALIDATED 
$data["password"] = password_hash($data["password"],PASSWORD_DEFAULT);

if($this->userModel->register($data))
{
    header("Location: http://localhost/alexportfolio/App/index.php?url=home/homey");
}
    else {
        die("something went wrong");
    }

// register user

//$this->user

} else { 
    //loda view with error
    $this->view("createAccount", $data);
}

} else {
        $data = [
            "username" => "",
    "email" =>"",
    "password" => "",
    "pwd-repeat" => "",
    "username_error" => "",
    "email_error" => "",
    "password_error" => "",
    "confirm_error" => "",
    "session" => "Create Account",
    "login" => "Login",
    "ahref" => "?url=login/authenticate",
    "homeahref" => "?url=createaccount/register"

];
$this->view("createAccount", $data);
}
}
}



//validate email
/*
if(empty($data["email"])){
$data["email_error"]

}
else{  
    
    
    echo "loadform";
}
}
}
*/
/*
    $data  = [
"email" => "",
"password" => "",
"name_error" => "",
"password_error" => "",
"confirm_error" => ""
];

$this->view("createAccount", $data);
*/
