<?php
include_once('../includes/connection.php'); 
    $sql = ("DELETE FROM menu WHERE ID =:ID");
    $stmt = $conn -> prepare($sql);
    $stmt -> bindParam(":ID", $_POST['ID']);
    $stmt -> execute();
    header("Location: ../admin/delete-menu.php");
?>