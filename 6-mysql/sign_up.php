<?php
include("./inc/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <form action="./sign_up_act.php" method="post">

<input type="text" placeholder="Username" name="username">
<input type="password" placeholder="Password" name="password">
<input type="email" placeholder="Email" name="email">
<input type="submit" value="Sign Up">
    </form>  
</body>
</html>