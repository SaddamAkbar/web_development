<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disappearing circle game</title>
    <style>
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            float: left;
            margin: 50px;
        }

        #red-circle {
            background-color: red;

        }

        #yellow-circle {
            background-color: yellow;

        }

        #green-circle {
            background-color: green;

        }

        #pink-circle {
            background-color: pink;

        }

        #black-circle {
            background-color: black;

        }
    </style>
</head>

<body>

    <div class="circle" id="red-circle"></div>
    <div class="circle" id="yellow-circle"></div>
    <div class="circle" id="green-circle"></div>
    <div class="circle" id="pink-circle"></div>
    <div class="circle" id="black-circle"></div>

    <script>
        let redCircle = document.getElementById("red-circle");
        let yellowCircle = document.getElementById("yellow-circle");
        let greenCircle = document.getElementById("green-circle");
        let pinkCircle = document.getElementById("pink-circle");
        let blackCircle = document.getElementById("black-circle");

        redCircle.onclick = function() {
            redCircle.style.display = "none";
            checkAllCirclesDisappeared()
        }
        yellowCircle.onclick = function() {
            yellowCircle.style.display = "none";
            checkAllCirclesDisappeared()
        }
        greenCircle.onclick = function() {
            greenCircle.style.display = "none";
            checkAllCirclesDisappeared()
        }
        pinkCircle.onclick = function() {
            pinkCircle.style.display = "none";
            checkAllCirclesDisappeared()
        }
        blackCircle.onclick = function() {
            blackCircle.style.display = "none";
            checkAllCirclesDisappeared()
        }

        // when all circle dispaear reload window in 2 second 
        function checkAllCirclesDisappeared() {
            if (redCircle.style.display === "none" &&
                yellowCircle.style.display === "none" &&
                greenCircle.style.display === "none" &&
                pinkCircle.style.display === "none" &&
                blackCircle.style.display === "none") {
                setTimeout(function() {
                    location.reload();
                }, 500); // 2000 milliseconds = 2 seconds
            }
        }
    </script>
</body>

</html>