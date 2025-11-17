<?php 
include("inc/db.php");
$id = $_GET['edit_id'];

$sql = "select * from services where id = :id";
$stm = $con->prepare($sql);
$stm->bindParam(":id", $id);

$stm->execute();

$obj = $stm->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./services_edit_act.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?php echo $obj->id ?>">
    <input type="text" name="title" id="" value="<?php echo $obj->title ?>">
    <br>
    <textarea name="description" id=""><?php echo $obj->description ?></textarea>
<br>
<input type="file" name="image" id="" >
<img src="./uploads/<?php echo $obj->image; ?>" width="50">
<br>
<textarea name="link" id=""><?php echo $obj->link; ?></textarea>

<br>
<input type="submit" value="Edit">



</form>
</body>
</html>