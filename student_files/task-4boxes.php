<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4boxes</title>
    <style>
        .container{
            display:flex;
            flex-wrap:wrap;
            /* flex-direction:row-reverse; */
            align-items:center;
            justify-content:center;
            background-color:yellow;
            height:500px;
            

        }
        .box1{
            background-color:aqua;
            width:100px;
            height:100px;
            /* order:1; */
            /* flex-grow:1; */
            

        }
        .box2{
            background-color:blue;
            width:100px;
            height:100px;
            /* order:1; */
        }
        .box3{
            background-color:green;
            width:100px;
            height:100px;
        }
        .box4{
            background-color:red;
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='box1'>1</div>
        <div class='box2'>2</div>
        <div class='box3'>3</div>
        <div class='box4'>4</div>
    </div>
    
</body>
</html>