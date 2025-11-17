<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Grid</title>
    <style>
        .container {
            display: grid;
            background-color: yellow;
            /* grid-row-gap: 9px;
            grid-column-gap:9px; */
            /* grid-template-columns: auto auto auto auto; */
            /* grid-gap: 10px; */
            /* justify-content: center; */

        }

        .item1 {
            
            background-color: aqua;
            border: 1px solid red;
            /* height: 200px; */
            /* grid-column: 1/3; */
            /* grid-row:1/span 3; */
        }
        .item2 {
           
            background-color: aqua;
            border: 1px solid red;
            
        }
        .item3 {
            
            background-color: aqua;
            border: 1px solid red;
            
        }
        .item4 {
            
            /* height: 200px; */
            background-color: aqua;
            border: 1px solid red;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="item1">1</div>
        <div class="item1">2</div>
        <div class="item1">3</div>
        <div class="item1">4</div>

        <!-- <div class="item3">3</div>
        <div class="item4">4</div>
        <div class="item3">5</div>
        <div class="item4">6</div>
        <div class="item4">7</div>
        <div class="item4">8</div> -->
    </div>
    
</body>
</html>