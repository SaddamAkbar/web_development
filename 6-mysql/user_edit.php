<?php 
include("./inc/db.php");
$id = (int) $_GET['edit_id'];

$sql = "select * from users where id = :id";
$stm = $con->prepare($sql);
$stm->bindParam(":id", $id);
$stm->execute();

$obj = $stm->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="./user_edit_act.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $obj->id ?>">
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" value="<?php echo $obj->name ?>" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Father Name</label>
                        <input type="text" name="f_name" value="<?php echo $obj->f_name ?> " class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="" class="form-label">enail</label>
                        <input type="email" name="email" id="" value="<?php echo $obj->email ?>" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Edit" class="btn btn-success">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>