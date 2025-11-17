<?php 
include("./inc/db.php");
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);

// check if email already exists
// $sql = "select count(*) as co unt from users where email = :email";

$check_sql = "select * from users where email = :email";
$check_stm = $con->prepare($check_sql); 
$check_stm->bindParam("email", $email);
$check_stm->execute();
// $count = $check_stm->fetch(PDO::FETCH_ASSOC)['count'];
$count = $check_stm->rowCount();
if ($count > 0) {
    // email already exists
    header("location:./sign_up.php?error=email_exists");
    exit();
} else {
    // proceed to insert
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "insert into users (name, password, email) values (:username, :password, :email)";
    $stm = $con->prepare($sql);

    $stm->bindParam("username", $username);
    $stm->bindParam("password", $hashed_password);
    $stm->bindParam("email", $email);
   if( $stm->execute()) {;
    header("location:./sign_in.php");
   } else {
    header("location:./sign_up.php");

   }    
}
?>