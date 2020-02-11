<?php


Class Portfolio extends baseController{


public function calendar(){

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

        $this->view("portfolio", $data);


}



}