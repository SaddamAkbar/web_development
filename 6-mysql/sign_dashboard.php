<?php include("./inc/auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbaord</title>
</head>
<body>
<h1>
    <?php include("./inc/sess.php"); ?>
</h1>
<h1>
Welcome to Dashboard, User Name: <?php echo $_SESSION['user_name']; ?>
</h1>

<a href="./sign_out.php">Sign Out</a>
    
</body>
</html>