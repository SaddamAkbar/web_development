<?php
include("./inc/db.php");

try {
    $title  = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    $image = null;

    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $allow = array('jpg', 'png', 'icon', 'jpeg');
        $path = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $image = time() . '_1.' . $path;

        if (!in_array($path, $allow)) {
            $_SESSION['error'] = "File type not allowed";
            header("location:./services_list.php");
            die();
        }

        if (!move_uploaded_file($_FILES['image']['tmp_name'], "./uploads/" . $image)) {
            $_SESSION['error'] = "Could not upload the file to the specified path";
            header("location:./services_list.php");
            die();
        }
    }

    $sql = "insert into services( title, description, link, image) 
                            values(:title, :description, :link, :image)";

        $stm = $con->prepare($sql);
        $stm->bindParam(":title", $title);
        $stm->bindParam(":description", $description);
        $stm->bindParam(":link", $link);
        $stm->bindParam(":image", $image);

        $stm->execute();

header("location:./services_list.php");

} catch (PDOException $e) {
    //throw $th;
    var_dump($e->getMessage());
    
}