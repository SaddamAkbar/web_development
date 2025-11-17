<?php 
include("./inc/db.php");



try {
    $id = $_POST['edit_id'];

    $name = $_POST['name'];
    $f_name = $_POST['f_name'];
    $email = $_POST['email'];

    $sql = "update users 
                set
                name = :name,
                f_name = :f_name,
                email = :email
            where id = :id";
    $stm = $con->prepare($sql);
    $stm->bindParam(":name", $name);
    $stm->bindParam(":f_name", $f_name);
    $stm->bindParam(":email", $email);
    $stm->bindParam(":id", $id);
    
    $stm->execute();

    header("location:./users_list.php");
} catch (PDOException $e) {
    //throw $th;
    var_dump($e->getMessage());
}
?>