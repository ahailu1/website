require_once "../libraries/database.php";

//IDUSERS= USERID
//UIDUSERS = USERNAME
//EMAIL USERS = EMAIL
//PWDUSERS = PASSWORD

require "../View/createAccount.php";

//$uri = $_SERVER['REQUEST_URI'];
// get uri

// change uri
//echo 

//ECHO $uri;



class Pages {


public function __construct(){

}
public function execute(){

    $this->index();
}


public function index(){

if(isset($_POST["submit"]))
{
$username = $_POST["uid"];
$email = $_POST["email"];
$password = $_POST["pwd"];
$passwordRepeat = $_POST["pwd-repeat"];

if(empty($username) || empty($email) ||empty($password) ||empty($passwordRepeat)){

header("Location:../view/createAccount.php?error=emptyfields&uid=".$username."&email=".$email);
exit();
//?error=emptyfields&uid=".$username."&email=".$email
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
 {
    header("Location:../View/createAccount.php?error=invaludemail&uid=".$username);
    exit();

} 
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location:../View/createAccount.php?error=invaludemail&uid=".$username);
    exit();

}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) 
{
    header("Location:../View/createAccount.php?error=invaludemail&uid=".$username);
    exit();
} 
else if ($password !== $passwordRepeat)
{
header("Location:../View/createAccount.php?error=passwordcheckuid=" .$username ."&email=".$email);
exit();
}
else {
    $datab = new DB();
    $datab = $datab->connect();
    $sql = "SELECT username FROM users WHERE usersname=?";
    $statement = $datab->prepare($sql);
$statement->execute();
    //if (!)

}

}
}
}

//$helo->index();

public function gettable(){
$conn = newbase::createdatabase("config.php");
$conn = $conn->pdo;
$table = new querybuilder($conn);
$table = $table->selecttable("users");

foreach($table as $key){
    $table = array_keys($key);
    };

 foreach($table as $key){

$this->column[$key] = null;
}

return $this->column;
}
};


$hello = new createaccount();
$rog = $hello->gettable();
var_dump(array_shift($rog));
var_dump($rog);

$length = count($rog);
$dd = $hello->data;
var_dump($dd);

array_combine($rog, $dd);