<?php


class connection {
public $db;
private $stmt;
private $error;
public function __construct()
{
  $this->db = $this->connect();
   
}
public function connect(){
$config = require_once "config.php";
try {
   return new PDO($config["connection"] .
";dbname=".$config["name"],
$config["username"],
$config["password"],
$config["options"]);
}
catch(PDOException $e){
echo "nope";
die($e->getMessage());

}
}

//prepare statement
public function query($sql){
$this->stmt = $this->db->prepare($sql);
}
//bind values;
public function bind($param, $value, $type = null){
if(is_null($type)){
switch(true){
case is_bool($value): $type = PDO::PARAM_INT;
break;
   case is_null($value): $type = PDO::PARAM_NULL;
   break;
   default:
 $type = PDO::PARAM_STR;
}
}

$this->stmt->bindValue($param,$value,$type);
}

public function exec(){
 return $this->stmt->execute();  
}
//get statement as array of objects
public function resultSet(){
$this->exec();
return $this->stmt->fetchAll(PDO::FETCH_OBJ);
}
//GET A SINGLE RECORD AS OBJECT
public function single(){
$this->exec();
//this execute returns an executed statement
//we are calling the execute statement and returning as object
return $this->stmt->fetch(PDO::FETCH_OBJ);
}

public function results(){
$this->exec();
return $this->stmt->fetch(PDO::FETCH_CLASS);
}
//ROWCOUNT IS A METHOD THAT IS A PART OF PDO
public function rowCount(){
   return $this->stmt->rowCount();
}
}


//if you wanna get a db connection type connection::connect
// the connection is the class and the connect is the method