<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        let age = prompt("Enter Your age?");

        if( age >= 18 ) {
            alert("adult");
        } else if (age < 18  && age > 11) {
            alert("teenager");
        } else if ( age < 10) {
            alert("children");
        }

        // let num = prompt("enter your number");

        // if( num % 2 === 0){
        //     alert("even");
        // } else {
        //     alert("odd");
        // }

        // let mode = prompt(" ENter Dark or WHite");

        // let color;

        // if(mode === "dark") {
        //     color = "black";
        // } else {
        //     color = "white";
        // }

        // console.log(color);

    </script>
</body>
</html>