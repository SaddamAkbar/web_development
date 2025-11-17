<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animations</title>
    <style>
        .container {
            width: 100vw;
            height: 100vh;
            background-color: red;
        }
        .box {
            height: 300px;
            width: 300px;
            color: white;
            background-color: aqua;
      
            animation-name: anime;
            animation-delay: 1s;
            animation-direction: normal;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }

        @keyframes anime {
            from {background-color:aqua;}
            to {background-color: yellow;}
            
        }

        

    
    </style>
</head>
<body>
    <div class="container">
        <div class="box">

        </div>
    </div>
</body>
</html>