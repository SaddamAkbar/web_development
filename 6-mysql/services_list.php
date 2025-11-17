<?php 
include("./inc/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>S#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Link</th>
            <th>Image</th>
            <th>Actipon</th>
        </tr>

        <?php 
        

        $sql = "select * from services";
        $stm = $con->prepare($sql);
        $stm->execute();

$sn=1;
        while($obj = $stm->fetch(PDO::FETCH_OBJ)) {
        
        ?>
        <tr>
            <td><?php echo $sn++; ?></td>
            <td><?php echo $obj->title; ?></td>
            <td><?php echo $obj->description; ?></td>
            <td><?php echo $obj->link; ?></td>
            <td><img src="./uploads/<?php echo $obj->image; ?>" width="50"></td>
            <td>
                <a href="./services_delete.php?delete_id=<?php echo $obj->id; ?>">Delete</a>
                <a href="./services_edit.php?edit_id=<?php echo $obj->id; ?>">Edit</a>
            </td>
        </tr>

        <?php }?>
    </table>
</body>
</html>