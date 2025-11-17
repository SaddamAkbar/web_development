<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Margin collapse</title>
    <style>
        *{
            /* box-sizing: border-box; */
            margin: 0;
            padding: 0;
        }
        .box1 {
            background-color: yellow;
            margin: 20px;
            height: 30px;
            border: 2px solid red;
            
        }
        .box2 { 
            background-color: green;
            border: 2px solid black;
            margin: 20px;
            height: 30px;
            padding: 2px;
        }
    </style>
</head>
<body>
    <div class="box1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ab alias corporis ea asperiores. Alias quo veritatis nam eaque ab illum magni ratione omnis ad debitis architecto voluptas, rerum provident saepe eligendi excepturi hic quia et impedit? Harum placeat in perspiciatis repellendus eligendi.

    </div>
    <div class="box2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ab alias corporis ea asperiores. Alias quo veritatis nam eaque ab illum magni ratione omnis ad debitis architecto voluptas, rerum provident saepe eligendi excepturi hic quia et impedit? Harum placeat in perspiciatis repellendus eligendi.
    </div>
</body>
</html>