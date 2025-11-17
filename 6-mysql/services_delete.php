<?php
include("./inc/db.php");


$id = $_GET['delete_id'];

$sql = "delete from services where id = :id";
        $stm = $con->prepare($sql);
        $stm->bindParam(":id", $id);
        
        $stm->execute();

        header("location:./services_list.php");
