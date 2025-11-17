<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="./jquery/jquery.min.js"></script>
    <style>
        body {
            text-align: center;
            margin-top: 50px;

        }
        #para {
            color: darkblue;
            font-size: 20px;
            margin-bottom: 20px;
        }
        #colorBox {
            padding: 10px;
            border: 1px solid red;
            width: 200px;
            margin: 20px auto;
        }

        .highlight {
            background-color: yellow;
        }
        .hidden {
            display: none;
        }
        
    </style>
</head>
<body>
<p id="para" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veritatis totam illo explicabo quo dolore aperiam excepturi odit assumenda. Aperiam et rerum dolores.</p>
<h1>jQuery First Example</h1>

<div id="colorBox">
    <input type="text" id="inputName" value="">
</div>
<ul id="list">
    <li>Item 1</li>
    <li>Item 1</li>
    <li>Item 1</li>
    <li>Item 1</li>
</ul>
<button id="btn1">Click Me</button>
<script>
    
    $(document).ready(function(){
       $("#btn1").click(function(){
        // $("#para").toggle();



       });

    //    $("#para").hover(function(){
    //     $(this).css("color", "red");
    //    }, function(){
    //     $(this).css("color", "darkblue");
    //    });


    // });

    // $("#inputName").keyup(function(){
    //     $("#para").text("You Typed: " + 
    //     $(this).val());
    // });

$("#btn1").click(function(){
// $("#para").text("new text");
// $("#para").html("<b>new text</b>");
// $("#inputName").val("Hello");

///Add Remove Element
// $("#list").append("<li>Mext</li>");
// $("#list").prepend("<li>first</li>");
// $("#list").remove();


// css and classes

// $("#para").addClass("highlight");
// $("#para").toggleClass("hidden");


// animation effects

$("#para").slideDown({ width: "200px", opacity: "0.5"}, 1000);





})
    
});
    

    
</script>
</body>
</html>