<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hi my name is Saddam</h1>
<div id="shape" style="display:none; position:absolute;"></div>




<!-- random color generator -->
<script type="text/javascript">
    
    function getRandomColor() {
        let letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // document.body.style.backgroundColor = getRandomColor();
    
    // document.body.style.color = getRandomColor();


    // make shape appear
    function makeShapeAppear() {
        let top = Math.random() * 400;
        let left = Math.random() * 400;
        let width = (Math.random() * 200) + 50; 
        if (Math.random() > 0.5) {
            document.getElementById("shape").style.borderRadius = "50%"; // Circle
        } else {
            document.getElementById("shape").style.borderRadius = "0"; // Square
        }
        document.getElementById("shape").style.width = width + "px";
        document.getElementById("shape").style.height = width + "px";
        document.getElementById("shape").style.top = top + "px";
        document.getElementById("shape").style.left = left + "px";
        document.getElementById("shape").style.backgroundColor = getRandomColor();
        document.getElementById("shape").style.display = "block";
        start = new Date().getTime();
    }
    makeShapeAppear();

    // make shape appear after random time
    // setTimeout(function() {
    //     // makeShapeAppear();
    //     location.reload();
    // },  500);
            
</script>
</body>
</html>