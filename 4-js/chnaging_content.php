<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="text">My Name is Saddam</h1>
    
    <button id="myButton">Change</button>
<script type="text/javascript">

    document.getElementById("myButton").onclick = function() {
        // let message = prompt("Enter your message");
        

        // document.getElementById("text").innerHTML = message;
        // let message = prompt("Enter your message");
        

        document.getElementById("text").style.color = "red";
        document.getElementById("text").style.backgroundColor = "green";
        document.getElementById("text").style.fontSize = "50px";
        document.getElementById("text").style.textAlign = "center";
        document.getElementById("text").style.border = "2px solid black";
        document.getElementById("text").style.padding = "10px";
        document.getElementById("text").style.margin = "10px";
        document.getElementById("text").style.borderRadius = "10px";
        document.getElementById("text").style.fontFamily = "Arial, sans-serif";
        document.getElementById("text").style.fontWeight = "bold";        
    }
    

</script>
</body>
</html>