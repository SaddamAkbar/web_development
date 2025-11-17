<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="./jquery/jquery.min.js"></script>
</head>
<body>

<h1>jQuery First Example</h1>
<button id="btn1">Click Me</button>
<script>
    
    $(document).ready(function(){
        $("#btn1").click(function(){
            alert("Button Clicked!");
        });
    });
    
    if(typeof jQuery != 'undefined'){
        alert("jQuery is loaded");
    } else {
        alert("jQuery is not loaded");
    }
</script>
</body>
</html>