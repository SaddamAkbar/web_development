<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: aqua;
            height: 700px;
        }
        * {
            margin: 0px;
            padding: 0px;
        }

        ul {
            padding-top: 10px;
            font-size: 20px;
            position: sticky;
        }
        li {
            display: inline;
            color: white;
            padding-left: 10px;
        }
        header {
            background-color: black;
            
        }

        .container {
            width: 200px;
            height: 200px;
            background-color: yellow;
        }
        .box1 {
            width: 100px;
            height: 100px;
            background-color: red;
            /* position: absolute; */
            /* top: 20px; */
        } 
        .box2 {
            width: 100px;
            height: 100px;
            background-color: green;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>contact us</li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="box1">1</div>
        <div class="box2">2</div>
    </div>
    
</body>
</html>