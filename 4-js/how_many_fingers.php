<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>How many fingers am I holding up?</h1>
    <p>Click on the button to find out!</p>
    <p><input type="text" id="myNumber"><button id="guess">Guess</button></p>
    
    <script type="text/javascript">
        document.getElementById("guess").onclick = function() {
            let myNumber = Math.floor(Math.random() * 6); // Random number between 0 and 5
            let userGuess = document.getElementById("myNumber").value;

            if (userGuess == myNumber) {
                alert("You guessed right! I was holding up " + myNumber + " fingers.");
            } else {
                alert("Wrong guess! I was holding up " + myNumber + " fingers.");
            }
        }
    </script>
</body>
</html>