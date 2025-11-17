<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main {
            height: 2000px;
            background: linear-gradient(lightblue, lightgreen);
            padding: 20px;
        }
        header, footer {
            height: 60px;
            background-color: #333;
        }
        .progress {
            background-color: red;
            height: 3px;
            animation: load 1s ease-in-out infinite;
        }

        @keyframes load {
            0% { width: 0; }
            50% { width: 40vw; }
            80% { width: 70vw; }
            100% { width: 100vw; }
        }
        
.heading {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #000;
}

/* Horizontal top and bottom lines */
.heading::before,
.heading::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  background: red;
  transition: all 0.5s;
}

.heading::before {
  top: 0;
  left: 0;
}

.heading::after {
  bottom: 0;
  right: 0;
}

/* Vertical left and right lines */
.heading span::before,
.heading span::after {
  content: '';
  position: absolute;
  width: 2px;
  height: 0;
  background: red;
  transition: all 0.5s;
}

.heading span::before {
  top: 0;
  left: 0;
}

.heading span::after {
  bottom: 0;
  right: 0;
}

/* Animate border "drawing around" */
.heading:hover::before,
.heading:hover::after {
  width: 100%;
}

.heading:hover span::before,
.heading:hover span::after {
  height: 100%;
}
</style>


        
    </style>
</head>
<body>
    
    <div class="progress"></div>
    <header></header>
    <main>
        <h1 class="heading"><span>Welcome to My Website</span></h1>
    </main>
    <footer></footer>   
        

</body>
</html>