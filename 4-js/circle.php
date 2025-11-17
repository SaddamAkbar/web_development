<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disappearing Circle Game</title>
    <style>
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            float: left;
            margin: 50px;
            cursor: pointer;
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
    // Get all circles
    let circles = document.querySelectorAll(".circle");

    circles.forEach(circle => {
        circle.onclick = function() {
            circle.style.display = "none"; // Hide when clicked

            // Reappear after 10 seconds
            setTimeout(function() {
                circle.style.display = "block";
            }, 1000); // 10000ms = 10 seconds
        }
    });
</script>

</body>
</html>
