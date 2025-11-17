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
            opacity: 1; /* fully visible */
            transition: opacity 1s ease; /* smooth fading */
        }

        #red-circle { background-color: red; }
        #yellow-circle { background-color: yellow; }
        #green-circle { background-color: green; }
        #pink-circle { background-color: pink; }
        #black-circle { background-color: black; }

        
        .hidden {
            opacity: 0;
            pointer-events: none; 
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
    let circles = document.querySelectorAll(".circle");

    circles.forEach(circle => {
        circle.onclick = function() {
            // Fade out
            circle.classList.add("hidden");

            // After 2 seconds, fade back in
            setTimeout(function() {
                circle.classList.remove("hidden");
            }, 2000);
        }
    });
</script>

</body>
</html>
