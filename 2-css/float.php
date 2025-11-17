<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float</title>
    <style>
        .box1 {
            width: 100px;
            height: 100px;
            background-color: yellow;
            border: 2px solid red;
            float: left;
        }
        .box2 {
            width: 100px;
            height: 100px;
            background-color: green;
            border: 2px solid black;
            float: left;
        }
        .box3 {
            width: 100px;
            height: 100px;
            background-color: blue;
            border: 2px solid black;
            /* float: left; */
        }
        .clearfix {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="box1"></div>
    <div class="box2"></div>
    <div class="clearfix"></div>
    <div class="box3"></div>
</body>
</html>