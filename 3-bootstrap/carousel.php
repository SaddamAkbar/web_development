<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <style>
        .carousel-item {
            height: 32rem;
            background-color: #050505ff;
            color: white;
            position: relative;
            
        }

        .container {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 50px;
        }

        .overlay-image {
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            background-position: center;
            background-size: cover;
            opacity: 0.5;

        }
    </style>
</head>

<body>
    <div class="carousel slide carousel-fade" id="myCarousel" data-bs-ride="carousel">

    <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>

        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            
    </ol>
        <div class="carousel-inner"> 
            <div class="carousel-item active" data-interval="2000">
                <div class="overlay-image" style="background-image: url('./2.png');"></div>
                <div class="container">
                    <h1>Headline</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam praesentium ratione quidem ad aliquam explicabo consectetur deleniti rem id enim!</p>
                    <a href="#" class="btn btn-lg btn-primary">Download</a>
                </div>
            </div>

            <div class="carousel-item " data-interval="500">
                <div class="overlay-image" style="background-image: url('./1.png');"></div>
                <div class="container">
                    <h1>Head222line</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam praesentium ratione quidem ad aliquam explicabo consectetur deleniti rem id enim!</p>
                    <a href="#" class="btn btn-lg btn-primary">Download</a>
                </div>
            </div>

        </div>

        <a  data-bs-target="#myCarousel" class="carousel-control-prev" 
        role="button" data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        </a>

        <a   data-bs-target="#myCarousel" class="carousel-control-next" 
        role="button" data-bs-slide="next">
        <span class="visually-hidden">Previous</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </a>

    </div>



    <!-- <script src="./bootstrap/js/bootstrap.bundle.min.js"></script> -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>