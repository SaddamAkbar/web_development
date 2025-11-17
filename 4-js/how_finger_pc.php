<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>How many fingers You are holding up? Guess By PC</h1>
    <p>Click on the button to find out!</p>
    <p><input type="text" id="myNumber"><button id="guess">Guess</button></p>
    
    <script type="text/javascript">
        document.getElementById("guess").onclick = function() {
            let myNumber = document.getElementById("myNumber").value;
            let gotIt = false;

            let numberOfTries = 1;

            while (gotIt == false) {
            // Choose random number by computer
            let guess = Math.random();
            guess = guess * 6;
            guess = Math.floor(guess); // Round down to nearest whole number

            if(guess == myNumber) {
                gotIt = true;
                alert("Got iT! It was a " + guess + ". It took me " + numberOfTries + " tries.");

            } else {
                // alert("Wrong guess! I was holding up " + guess + " fingers.");
                // numberOfTries = numberOfTries + 1;
                numberOfTries++;
            }
        
        }

        }
    </script>
</body>
</html>