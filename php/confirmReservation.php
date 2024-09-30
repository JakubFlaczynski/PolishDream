<?php
include_once('../includes/connection.php');

if (isset($_POST['ID'])) {
    $sql = "UPDATE reservations SET Confirmed = :confirmed WHERE ID = :ID";
    $stmt = $conn->prepare($sql);
    $confirmedValue = "Yes";
    $stmt->bindParam(":confirmed", $confirmedValue);
    $stmt->bindParam(":ID", $_POST['ID']);

    if ($stmt->execute()) {
        header("Location: ../admin/reservations.php");
        exit(); 
    }
}
?>
