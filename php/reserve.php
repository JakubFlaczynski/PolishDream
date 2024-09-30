<?php
include_once('../includes/connection.php'); 

    $sql = ("INSERT INTO reservations(FirstName, LastName, Number, Date ) VALUES (:FirstName,:LastName,:Number,:Date)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':FirstName',$_POST['FirstName']);
    $stmt->bindParam(':LastName',$_POST['LastName']);
    $stmt->bindParam(':Number', $_POST['Number']);
    $stmt->bindParam(':Date', $_POST['Date']);
    $stmt -> execute();

    header("Location: ../index.php");
    
?>