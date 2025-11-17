<?php include("./inc/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dcm</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <a href="./user_new.php" class="btn btn-primary mt-5">insert data</a>
                <table class="table table-bordered border-danger mt-5">
                    <thead>
                        <tr>
                            <th>S#</th>
                            <th>Name</th>
                            <th>F-name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //retrieve -- select// query
                        try {
                            $sql = "select * from users";
                            $stm = $con->prepare($sql);
                            $stm->execute();
                        } catch (PDOException $e) {
                            var_dump($e->getMessage());    
                        } 
                        ?>
                        <?php
                            $sn = 1;
                            while($obj = $stm->fetch(PDO::FETCH_OBJ)){
                        ?>                      
                        <tr>
                            <td><?php  echo $sn++; ?></td>
                            <td><?php  echo $obj->name; ?></td>
                            <td><?php  echo $obj->f_name; ?></td>
                            <td><?php  echo $obj->email; ?></td>
                            <td>
                                <a href="./user_edit.php?edit_id=<?php echo $obj->id; ?>" class="btn btn-info ">edit</a>
                                <a href="./user_delete.php?delete_id=<?php echo $obj->id; ?>" class="btn btn-danger ">delete</a>
                                
                                
                            </td>
                        </tr>
                        <?php }?>
                        <!-- <tr>
                            <td>2</td>
                            <td>sadeeq khan</td>
                            <td>Amir khan khan</td>
                            <td>sadeeq@gmail.com</td>
                            <td>
                                <button class="btn btn-info">Edit</button>
                                <button class="btn btn-danger">delete</button>
                            </td>
                        </tr> -->
                    </tbody>                    
                </table>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>
</html>