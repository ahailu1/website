<?php

if(isset($_SESSION["userId"])){

$data =[
"username" => "",
"password" => "",
"username_error" => "",
"password_error" =>"",
"email_error" => "",
"confirm_error" => "",
"session"=>"Hi," . $_SESSION["userId"],
"login" => "Logout", 
"ahref" => "?url=login/logout",
"homeahref" => "#"

];

}
else{
    session_destroy();
}


