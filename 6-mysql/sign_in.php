<?php
session_start();
include("./inc/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./sign_in_act.php" method="post">

<input type="email" name="email" id="" placeholder="Email">
<br>
<input type="password" name="password" id="" placeholder="Password">
<br>
<input type="submit" value="Sign In">

    </form>
    
</body>
</html>