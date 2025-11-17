<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transition</title>
</head>
<style>
    .container {
        background-color: aqua;
        height: 40vh;
    }

    img {
        width: 400px;
        transition-property: width;
        transition-duration: 3s;
        transition-timing-function: ease-in-out;
        transition-delay: 2s;
    }

    img:hover {
        width: 40px;

    }

    
</style>
<body>
    <div class="container">
        <img src="./ab.jpg"  alt="">

    </div>
</body>
</html>