<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<p id="text">STyle text in js</p>
<button id="myButton">Style text</button>



    <script type="text/javascript">
        document.getElementById("myButton").onclick = function() {
            document.getElementById("text").style.color = "red";
            // document.getElementById("text").style.fontSize = "30px";
            // document.getElementById("text").style.fontFamily = "Arial";
            // document.getElementById("text").style.backgroundColor = "black";
            // document.getElementById("text").style.padding = "10px";
            // document.getElementById("text").style.width = "250px";
            // document.getElementById("text").style.textAlign = "center";
        }

    </script>
 



</body>

</html>