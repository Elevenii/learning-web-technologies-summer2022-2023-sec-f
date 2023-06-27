<?php
include 'connect.php';

    $id = $_GET["id"];
    $sql = "DELETE FROM `product` WHERE `id` = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {

    $msg = "Product with ID $id has been deleted.";
    } else {

    $msg = "Error deleting product with ID $id: " . mysqli_error($con);
    }
    header("Location: datadb.php?msg=" . urlencode($msg));
    exit();
    ?>