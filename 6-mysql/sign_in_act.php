<?php
session_start();
include("./inc/db.php");
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$sql = "select * from users where email = :email";
$stm = $con->prepare($sql);
$stm->bindParam("email", $email);
$stm->execute();
$user = $stm->fetch(PDO::FETCH_ASSOC);
if ($user && password_verify($password, $user['password'])) {
    // valid credentials
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    header("location:./sign_dashboard.php");
    $_SESSION['success'] = "Sign in successful. Welcome " . $user['name'] . "!";
} else {
$_SESSION['error'] = "Invalid email or password.";
    // invalid credentials
    header("location:./sign_in.php?error=invalid_credentials");
    exit();
}