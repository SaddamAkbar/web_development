<?php 
include("./inc/db.php");
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

$sql = "select * from users where email = :email";
$stm = $con->prepare($sql);
$stm->bindParam(":email", $email);
$stm->execute();

$count = $stm->rowCount();
if($count > 0) {
    header("location:./login.php");

} else{
    header("location:./sign_dashboard.php");

}


?>