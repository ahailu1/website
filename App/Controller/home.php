<?php

Class Home extends baseController{

public function __construct()
{

}
public function homey(){
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
$this->view("home", $data);


}
}