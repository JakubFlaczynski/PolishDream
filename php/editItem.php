<?php
include_once('../includes/connection.php'); 
    $ID =  $_REQUEST['ID'];
    $sql = "SELECT * FROM menu WHERE ID='$ID'";
    foreach ($conn->query($sql) as $result) {

        if ($_REQUEST['Name'] === '') {
            $Name = $result['Name'];
        } else {
            $Name = $_REQUEST['Name'];
        }
        if ($_REQUEST['Description'] === '') {
            $Description = $result['Description'];
        } else {
            $Description = $_REQUEST['Description'];
        }
        if ($_REQUEST['Price'] === '') {
            $Price = $result['Price'];
        } else {
            $Price = $_REQUEST['Price'];
        }

      }


    $sql = "UPDATE menu SET Name=:Name,Description=:Description,Price=:Price WHERE ID=:ID";
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':Name', $Name);
    $stmt->bindParam(':Description', $Description);
    $stmt->bindParam(':Price', $Price);
    $stmt->bindParam(':ID', $ID);
    $stmt -> execute();
    header("Location: ../admin/edit-menu.php");