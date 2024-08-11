login session
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require "config.php";

$email = $_POST['e'];
$password = $_POST['p'];

$q = "SELECT * FROM registration WHERE email = '".$email."' AND password = '".$password."' ";
$rs = mysqli_query($conn,$q);

$n = $rs->num_rows;

if($n == 1){

    echo("success");

    $d = $rs->fetch_assoc();
    $_SESSION["u"] = $d;

   
}else{
    echo("Invalid Email or Password");
}

?>


logout session

<?php

session_start();

if(isset($_SESSION["u"])){
    $_SESSION["u"] = null;
    session_destroy();

    echo("success");
    
}

?>
