<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- <div class="container">
        <div class="row">
            <div class="col-6 border p-4">
                col-6
            </div>
            <div class="col-6 border p-4">
                col-6
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-6  mt-5">
                <input type="color" class="  form-control-color" placeholder="First name">
            </div>
            <div class="col-md-6 mt-5">
                <label for="country" class="form-label">Select Country</label>
                <select name="" id="country" class="form-select">
                    <option value="Pakistan">Pakistan</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Pakistan">Pakistan</option>
                </select>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <input type="checkbox" id="dildar" class="form-check-input" >
                <label for="dildar" class="form-check-label">CHECK bOX</label>
            </div>
            <div class="col-md-6">
                <input type="radio" id="dildar1" class="form-check-input" >
                <label for="dildar1" class="form-check-label">Radio bOX</label>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Range</label>
                <input type="range" name="" class="form-range" id="">
            </div>
        </div>  
    </div>

    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>