<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex</title>
    <style>
        .container {
            background-color: yellow;
            display: flex;
            height: 400px;
            /* flex-direction: column;  */ 
            /* flex-direction: row-reverse; */
            flex-wrap: wrap;
            /* justify-content: center; */
            justify-content: space-between;
            align-items: center;


        }

        .box1 {
            width: 100px;
            height: 100px;
            background-color: red;
            order: 3;
            /* flex-grow: 1; */
            flex-shrink:50;
        }

        .box2 {
            width: 100px;
            height: 100px;
            background-color: brown;
            /* flex-grow: 1; */
        }

        .box3 {
            width: 100px;
            height: 100px;
            background-color: aqua;
        }

        .box4 {
            width: 100px;
            height: 100px;
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box1">1</div>
        <div class="box2">2</div>
        <div class="box3">3</div>
        <div class="box4">4</div>
        <!-- <div class="box4">4</div>
        <div class="box4">4</div>
        <div class="box4">4</div> -->
    </div>

</body>

</html>