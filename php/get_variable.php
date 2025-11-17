<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // print_r($_GET);
    if(is_numeric($_GET['number'] && $_GET['number'] > 0 && $_Get["number"] == round($_GET['number']))) {
        // echo $_GET['number'];
        $theNumber = $_GET['number'];
        $i = 2;
        $isPrime = true;

        while($i < $theNumber) {
            if($theNumber % $i == 0) {
                $isPrime = false;
            }

            $i++;
        }
        
        if($isPrime) {
            echo "<p> $theNumber is a Prime Number </p>";
        } else {
            echo "<p>". $theNumber . " is Not a Prime Number </p>";
        }
        
        


    }

    ?>

    <p> Please Enter a WHole Number</p>
    <form action="" method="GET">
    <p><input type="text" name="number">
    <input type="submit" value="Go">
    </form>

</p>
    
</body>
</html>