<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Query</title>
    <style>
        header {
            background-color: black;
            color: white;
            height: 50px;
        }
        * {
            margin: 0;
            padding: 0;
        }
        li {
            display: inline-grid;
            grid-template-columns: 50px;
            list-style-type: none;
        }
        .container {
            background-color: yellow;
            height: 40vh;
            display: grid;
            grid-template-columns: 40% 60%;
            gap: 20px;
            margin-top: 20px;
        }

        .img-box img {
            width: 100%;
            height: 40vh;
            display: block;
        }

        @media screen and (max-width: 600px) {
            body {
                background-color: lightblue;
            }
            header {
                display: none;
            }
            .container {
                grid-template-columns: 1fr;
            }
            .img-box,
            .text-box {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="img-box">
            <img src="../student_files/1.jpeg" width="250" height="250" alt="Placeholder Image">
        </div>
        <div class="text-box">
            <h1>Media Query Example</h1>
            <p>This is an example of a media query in CSS. Resize the browser window to see the effect.</p>
        </div>

    </div>

</body>

</html>