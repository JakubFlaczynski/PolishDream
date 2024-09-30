<?php
include_once('../includes/connection.php'); 

    $sql = ("INSERT INTO menu(Name, Description, Price) VALUES (:Name,:Description,:Price)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':Name',$_POST['Name']);
    $stmt->bindParam(':Description',$_POST['Description']);
    $stmt->bindParam(':Price', $_POST['Price']);
    $stmt -> execute();

    header("Location: ../admin/add-menu.php");
    
?>