<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK-1</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body><div class="container-fluid">
    <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-1 bg-success"></div>
        <div class="col-sm-10 col-md-10 col-lg-10  bg-success ">
            <nav class="navbar bg-success">
                <div class="container">
                    <a class="navbar-brand"><h1 class='text-light'>Item Lister</h1></a>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2 " type="search" placeholder="Search items..." aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1 bg-success"></div>
        <div class="col-sm-1 col-md-1 col-lg-1" offset></div>
        <div class="col-sm-10 col-md-10 col-lg-10 border p-4 mt-3">
               
            <h2>Add Items</h2>
            <form class="d-flex" role="search">
                <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success bg-black" type="submit">Add</button>
            </form>
            <h2>Items</h2>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 border p-3  ms-2">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-2 ">Item 1</div>
                        <div class="col-md-8 col-sm-8 col-lg-8 "></div>
                        <div class="col-md-2 col-sm-2 col-lg-2 ">
                            Hi<i class="fas fa-pencil"></i>
                            <i class="fas fa-trash"></i>
                            
                        </div>
                        
                    </div>
                </div>
                 <div class="col-sm-12 col-md-12 col-lg-12 border p-3 me-2 ms-2">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-2 ">Item 2</div>
                        <div class="col-md-8 col-sm-8 col-lg-8  "></div>
                        <div class="col-md-2 col-sm-2 col-lg-2  ">
                            <i class="fas fa-pencil"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                        
                    </div>
                </div>
                 <div class="col-sm-12 col-md-12 col-lg-12 border p-3 me-2 ms-2">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-2 ">Item 3</div>
                        <div class="col-md-8 col-sm-8 col-lg-8 "></div>
                        <div class="col-md-2 col-sm-2 col-lg-2 ">
                            <i class="fas fa-pencil"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                        
                    </div>
                </div>
                 <div class="col-sm-12 col-md-12 col-lg-12 border p-3 me-2 ms-2">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-lg-2 ">Item 4</div>
                        <div class="col-md-8 col-sm-8 col-lg-8 "></div>
                        <div class="col-md-2 col-sm-2 col-lg-2 font-success">
                            <i class="fas fa-pencil"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-1"offset></div>

    </div>
</div>
   
   <script src="bootstrap/js/bootstrap.min.js"></script>  
</body>
</html>