<?php

class user {
public $db;
public $tab =[];
//establish connection
public function __construct(){

$this->db = new Connection; 

}

public function getPosts(){
$this->db->query("SELECT * FROM users");
return $this->db->resultSet();
}


public function register($data){
$this->db->query("INSERT INTO users (username, email, password) VALUES(:username, :email,:password)");
$this->db->bind(":username", $data["username"]);
$this->db->bind(":password", $data["password"]);
$this->db->bind(":email", $data["email"]);

//execute
if($this->db->exec()){
    return true;
}
else{
    return false;
}
}

public function login($data){

$this->db->query("SELECT username,password,email FROM users WHERE username = '{$data["username"]}' ");
$row = $this->db->single();
//$email = $this->db->single()->email;

if(password_verify($data["password"],$row->password)){
    return $row; 
}
else{ 
if($row->username == $data["username"] && !password_verify($data["password"],$row->password))
 {
    return false;
}}
}

public function findUsername($data){
$this->db->query("SELECT username FROM users WHERE username = '{$data["username"]}' ");
//$this->db->bind(":username",$data["username"]);
$check = $this->db->single();
var_dump($check);
if($check){
return true;
}
else {
 return false;
}
}

public function findPassword($data){
$this->db->query("SELECT * FROM users where username = :username ");
$this->db->bind(":username", $data["username"]);
$pass = $this->db->single();
if(!$pass){
return false;
}
else { 
if(password_verify($data["password"], $this->db->single()->password)) {
return true;
}
}
}
public function findUserByEmail($email){
$this->db->query("SELECT * FROM USERS WHERE email = :email");
$this->db->bind(":email", $email);

$row = $this->db->single();

//check row

//check row
if($this->db->rowCount() > 0){
    return true;
}
else{
    return false;
}

}
}
//$insert = "INSERT INTO USERS ";

//$h = $h->tab;



//establish connection
//get table through query builder
//get data from controller
//insert into table
//
